/* newsapp.sql
 * James Shively III
 * P4: News Aggregator App
 * SQL Statement for the Menu
 */
 
SET foreign_key_checks = 0; #turn off constraints temporarily

#since constraints cause problems, drop tables first, working backward
DROP TABLE IF EXISTS wn18_categories; 
DROP TABLE IF EXISTS wn18_submenus;
  
#all tables must be of type InnoDB to do transactions, foreign key constraints
CREATE TABLE wn18_categories(
CategoryID INT UNSIGNED NOT NULL AUTO_INCREMENT, 
Title TEXT DEFAULT '',
Description TEXT DEFAULT '', 
PRIMARY KEY (CategoryID)
)ENGINE=INNODB; 

#assigning first survey to AdminID == 1
INSERT INTO wn18_categories VALUES (NULL,'News','Latest news of the US, World, and Technology!'); 
INSERT INTO wn18_categories VALUES (NULL,'Music','Stay up-to-date with all your favorite bands!');
INSERT INTO wn18_categories VALUES (NULL,'Video Games','Get all the information for all new game releases and reviews!');

#foreign key field must match size and type, hence SurveyID is INT UNSIGNED
CREATE TABLE wn18_submenus(
SubMenuID INT UNSIGNED NOT NULL AUTO_INCREMENT,
CategoryID INT UNSIGNED DEFAULT 0,
SubMenuTitle TEXT DEFAULT '',
Description TEXT DEFAULT '',
SubMenuURL VARCHAR(258), 
PRIMARY KEY (SubMenuID), 
FOREIGN KEY (CategoryID) REFERENCES wn18_categories(CategoryID) ON DELETE CASCADE
)ENGINE=INNODB;

INSERT INTO wn18_submenus VALUES (NULL,1,'US','Daily News from the most powerful nation in the WORLD!','https://news.google.com/news/rss/headlines/section/topic/NATION?ned=us&hl=en&gl=US');
INSERT INTO wn18_submenus VALUES (NULL,1,'World','Find out what\'s going on around the globe!','https://news.google.com/news/rss/headlines/section/topic/WORLD?ned=us&hl=en&gl=US');
INSERT INTO wn18_submenus VALUES (NULL,1,'Technology','Stay up-to-date on all the new gadget releases and information!','https://news.google.com/news/headlines/section/topic/TECHNOLOGY?ned=us&hl=en&gl=US');
INSERT INTO wn18_submenus VALUES (NULL,2,'Music News','Here is all the news you need in the music world!','https://news.google.com/news/rss/search/section/q/music%20news/music%20news?hl=en&gl=US&ned=us');
INSERT INTO wn18_submenus VALUES (NULL,2,'Events','Find out new tours of your favorite musical acts!','https://news.google.com/news/rss/search/section/q/music%20events/music%20events?hl=en&gl=US&ned=us');
INSERT INTO wn18_submenus VALUES (NULL,2,'Discover','Looking for upcoming groups? Here is a section for you!','https://news.google.com/news/rss/search/section/q/music%20local/music%20local?hl=en&gl=US&ned=us');
INSERT INTO wn18_submenus VALUES (NULL,3,'New Releases','A section of new video games that are coming soon!','https://news.google.com/news/rss/search/section/q/video%20games%20new%20releases/video%20games%20new%20releases?hl=en&gl=US&ned=us');
INSERT INTO wn18_submenus VALUES (NULL,3,'Gaming Events','Looking for tournaments or other events? Look no further!','https://news.google.com/news/rss/search/section/q/video%20games%20events/video%20games%20events?hl=en&gl=US&ned=us');
INSERT INTO wn18_submenus VALUES (NULL,3,'Gaming News','All your up-to-date gaming news!','https://news.google.com/news/rss/search/section/q/video%20games%20news/video%20games%20news?hl=en&gl=US&ned=us');

SET foreign_key_checks = 1; #turn foreign key check back on