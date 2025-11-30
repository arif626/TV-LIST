<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

$channels = [
  "channels" => [
    // Sports Channels
    [
      "id" => 1,
      "name" => "BTV",
      "logoUrl" => "https://raw.githubusercontent.com/Shakil1294/pcv/main/logo/btv.png",
      "streamUrl" => "https://owrcovcrpy.gpcdn.net/bpk-tv/1709/output/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 2,
      "name" => "BTV World",
      "logoUrl" => "https://d38ll44lbmt52p.cloudfront.net/cms/channel_poster/1677040358634_BTVogo.png",
      "streamUrl" => "https://www.btvlive.gov.bd/live/37f2df30-3edf-42f3-a2ee-6185002c841c/BD/d96eb7f4-83c2-4472-9597-3568390a8ebf/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => true
    ],
    [
      "id" => 3,
      "name" => "BTV Chattogram",
      "logoUrl" => "https://raw.githubusercontent.com/Shakil1294/pcv/main/logo/btv_ctg.png",
      "streamUrl" => "https://www.btvlive.gov.bd/live/37f2df30-3edf-42f3-a2ee-6185002c841c/BD/a707f2dc-9704-413a-a67c-17c64a77c350/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => true
    ],
    [
      "id" => 4,
      "name" => "ATN Bangla",
      "logoUrl" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/ATN_Bangla.svg/1200px-ATN_Bangla.svg.png",
      "streamUrl" => "https://owrcovcrpy.gpcdn.net/bpk-tv/1722/output/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 5,
      "name" => "Channel i",
      "logoUrl" => "https://upload.wikimedia.org/wikipedia/en/thumb/8/88/Channel-i.svg/1200px-Channel-i.svg.png",
      "streamUrl" => "https://owrcovcrpy.gpcdn.net/bpk-tv/1723/output/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 6,
      "name" => "NTV",
      "logoUrl" => "https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/NTV_%28Bangladesh%29_logo.svg/1200px-NTV_%28Bangladesh%29_logo.svg.png",
      "streamUrl" => "https://owrcovcrpy.gpcdn.net/bpk-tv/1716/output/1716-audio_113462_eng=113200-video=1692000.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 7,
      "name" => "Somoy TV",
      "logoUrl" => "https://www.somoynews.tv/icon.png",
      "streamUrl" => "https://owrcovcrpy.gpcdn.net/bpk-tv/1702/output/index.m3u8",
      "category" => "BANGLADESH",
      "description" => "BANGLADESH channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 8,
      "name" => "Sony Ten 1",
      "logoUrl" => "https://jiotvimages.cdn.jio.com/dare_images/images/Ten_HD.png",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/154.ts",
      "category" => "sports",
      "description" => "Premium sports entertainment",
      "language" => "English",
      "isActive" => true,
      "isPremium" => true
    ],
    [
      "id" => 9,
      "name" => "Sony Ten 2",
      "logoUrl" => "https://jiotvimages.cdn.jio.com/dare_images/images/Ten2_HD.png",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/31314.ts",
      "category" => "sports",
      "description" => "Premium sports entertainment",
      "language" => "English",
      "isActive" => true,
      "isPremium" => true
    ],
    [
      "id" => 10,
      "name" => "Sony Ten 5",
      "logoUrl" => "https://jiotvimages.cdn.jio.com/dare_images/images/Six_HD.png",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/176.ts",
      "category" => "sports",
      "description" => "Premium sports entertainment",
      "language" => "English",
      "isActive" => true,
      "isPremium" => true
    ],
    [
      "id" => 11,
      "name" => "TNT Sports 1",
      "logoUrl" => "https://imgu.rs/i/TNTSports/TNT1.png",
      "streamUrl" => "http://kstv.us:8080/live/carloskiu/4461542986/47850.m3u8",
      "category" => "sports",
      "description" => "International sports coverage",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 12,
      "name" => "TNT Sports 2",
      "logoUrl" => "https://imgu.rs/i/TNTSports/TNT2.png",
      "streamUrl" => "http://kstv.us:8080/live/carloskiu/4461542986/47851.m3u8",
      "category" => "sports",
      "description" => "International sports coverage",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
		[
      "id" => 12,
      "name" => "TNT Sports 3",
      "logoUrl" => "https://imgu.rs/i/TNTSports/TNT3.png",
      "streamUrl" => "http://kstv.us:8080/live/carloskiu/4461542986/47852.m3u8",
      "category" => "sports",
      "description" => "International sports coverage",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
		[
      "id" => 12,
      "name" => "Star Sports 1",
      "logoUrl" => "https://abusaeeidx.github.io/Tv-Channel-Logo/CricHD/runded/16-by-xfireflix.png",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/148.ts",
      "category" => "sports",
      "description" => "International sports coverage",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
	[
      "id" => 12,
      "name" => "Star Sports 2",
      "logoUrl" => "https://static.wikia.nocookie.net/logopedia/images/a/ac/Star_Sports_2.jpg/revision/latest?cb=2019121423235",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/239.ts",
      "category" => "sports",
      "description" => "International sports coverage",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 13,
      "name" => "Star Sport SL 1",
      "logoUrl" => "https://tstatic.akash-go.com/cms-ui/images/custom-content/1735043602147.png",
      "streamUrl" => "http://dhoomtv.xyz///live/8zpo3GsVY7/beneficial2concern/238.ts",
      "category" => "sports",
      "description" => "Sri Lankan sports channel",
      "language" => "English/Sinhala",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 14,
      "name" => "La Liga TV",
      "logoUrl" => "la_liga_tv.png",
      "streamUrl" => "http://10.20.30.30:8989/LALIGA_HD/index.m3u8",
      "category" => "sports",
      "description" => "Spanish football league",
      "language" => "English/Spanish",
      "isActive" => true,
      "isPremium" => true
    ],
    
    // Indian Bangla Channels
    [
      "id" => 15,
      "name" => "Colors Bangla",
      "logoUrl" => "colorsHD.png",
      "streamUrl" => "http://10.20.30.30:8989/Colors_Bangla/index.m3u8",
      "category" => "indian_bangla",
      "description" => "Popular Bengali entertainment channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 16,
      "name" => "Star Jalsha",
      "logoUrl" => "star_jalsha.png",
      "streamUrl" => "http://10.20.30.30:8989/Star_Jalsha/index.m3u8",
      "category" => "indian_bangla",
      "description" => "Popular Bengali entertainment channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 17,
      "name" => "Sony Aath",
      "logoUrl" => "SonyAathSD.png",
      "streamUrl" => "http://10.20.30.30:8989/Sony_Aath/index.m3u8",
      "category" => "indian_bangla",
      "description" => "Bengali entertainment channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 18,
      "name" => "Zee Bangla",
      "logoUrl" => "Z_Bangla_logo.png",
      "streamUrl" => "http://10.20.30.30:8989/ZEE_Bangla/index.m3u8",
      "category" => "indian_bangla",
      "description" => "Bengali entertainment channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Bangladeshi Channels
    [
      "id" => 19,
      "name" => "Jamuna TV",
      "logoUrl" => "JamunaTV.png",
      "streamUrl" => "http://10.20.30.30:8989/Jamuna_TV/index.m3u8",
      "category" => "bangladeshi",
      "description" => "Bangladeshi news channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 20,
      "name" => "Independent TV",
      "logoUrl" => "Independent_TV.png",
      "streamUrl" => "http://10.20.30.30:8989/Independent_TV/index.m3u8",
      "category" => "bangladeshi",
      "description" => "Bangladeshi news channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 21,
      "name" => "Somoy TV",
      "logoUrl" => "Somoy_TV.png",
      "streamUrl" => "http://10.20.30.30:8989/Somoy_TV/index.m3u8",
      "category" => "bangladeshi",
      "description" => "Bangladeshi news channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 22,
      "name" => "Enter10 Bangla",
      "logoUrl" => "Enter10Bangla.jpg",
      "streamUrl" => "http://10.20.30.30:8989/Entarr10B/index.m3u8",
      "category" => "indian_bangla",
      "description" => "Popular Bengali entertainment channel",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Bollywood Channels
    [
      "id" => 23,
      "name" => "Srktv",
      "logoUrl" => "srktv.png",
      "streamUrl" => "http://10.20.30.30:8989/Srktv/index.m3u8",
      "category" => "bollywood",
      "description" => "Bollywood entertainment",
      "language" => "Hindi",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 24,
      "name" => "Sony MAX",
      "logoUrl" => "SONY-MAX-HD.png",
      "streamUrl" => "http://10.20.30.30:8989/Sony_MAX/index.m3u8",
      "category" => "bollywood",
      "description" => "Bollywood movies and entertainment",
      "language" => "Hindi",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 25,
      "name" => "ZEE Cinema",
      "logoUrl" => "ZEECINEMA.png",
      "streamUrl" => "http://10.20.30.30:8989/ZEE_Cinema/index.m3u8",
      "category" => "bollywood",
      "description" => "Bollywood movies channel",
      "language" => "Hindi",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 26,
      "name" => "BOLLYWOOD",
      "logoUrl" => "BOLLYWOOD.png",
      "streamUrl" => "http://10.20.30.30:8989/BOLLYWOOD/index.m3u8",
      "category" => "bollywood",
      "description" => "Bollywood movies and music",
      "language" => "Hindi",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Hollywood Channels
    [
      "id" => 27,
      "name" => "Sony PIX",
      "logoUrl" => "SONY-PIX-HD.png",
      "streamUrl" => "http://10.20.30.30:8989/Sony_PIX/index.m3u8",
      "category" => "hollywood",
      "description" => "Hollywood and English movies",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 28,
      "name" => "Movies Action",
      "logoUrl" => "Movies_Action.png",
      "streamUrl" => "http://10.20.30.30:8989/Movies_Action/index.m3u8",
      "category" => "hollywood",
      "description" => "Action movies channel",
      "language" => "Hindi/English",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Kids Channels
    [
      "id" => 29,
      "name" => "24/7 MOTU PATLU",
      "logoUrl" => "motu_patlu.png",
      "streamUrl" => "http://10.20.30.30:8989/24/7_MOTU_PATLU/index.m3u8",
      "category" => "kids",
      "description" => "24/7 Motu Patlu cartoon channel",
      "language" => "Hindi",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Documentary Channels
    [
      "id" => 30,
      "name" => "Discovery",
      "logoUrl" => "Discovery.png",
      "streamUrl" => "http://10.20.30.30:8989/Discovery/index.m3u8",
      "category" => "documentary",
      "description" => "Science and nature documentaries",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
    [
      "id" => 31,
      "name" => "National Geographic",
      "logoUrl" => "National_Geographic.png",
      "streamUrl" => "http://10.20.30.30:8989/National_Geographic/index.m3u8",
      "category" => "documentary",
      "description" => "Nature and wildlife documentaries",
      "language" => "English",
      "isActive" => true,
      "isPremium" => false
    ],
    
    // Religious Channels
    [
      "id" => 32,
      "name" => "Peace TV Bangla",
      "logoUrl" => "peace_tv_bangla.png",
      "streamUrl" => "http://10.20.30.30:8989/PeaceTvBangla/index.m3u8",
      "category" => "religious",
      "description" => "Islamic entertainment",
      "language" => "Bangla",
      "isActive" => true,
      "isPremium" => false
    ]
  ]
];

echo json_encode($channels, JSON_PRETTY_PRINT);
?>