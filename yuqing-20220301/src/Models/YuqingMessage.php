<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class YuqingMessage extends Model
{
    /**
     * @example Alipay
     *
     * @var string
     */
    public $appName;

    /**
     * @example 3
     *
     * @var int
     */
    public $appScore;

    /**
     * @example HUAWEI_APPSTORE
     *
     * @var string
     */
    public $appStoreName;

    /**
     * @var string[]
     */
    public $atAuthorNames;

    /**
     * @example 1
     *
     * @var int
     */
    public $audioCount;

    /**
     * @example https://xxx.png
     *
     * @var string
     */
    public $authorAvatarUrl;

    /**
     * @example 12
     *
     * @var int
     */
    public $authorFollowersCount;

    /**
     * @example 12
     *
     * @var int
     */
    public $authorFriendsCount;

    /**
     * @example f
     *
     * @var string
     */
    public $authorGender;

    /**
     * @example xxx
     *
     * @var string
     */
    public $authorId;

    /**
     * @example 100
     *
     * @var int
     */
    public $authorLikesCount;

    /**
     * @example xxx
     *
     * @var string
     */
    public $authorName;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $authorProfileUrl;

    /**
     * @example 12
     *
     * @var int
     */
    public $authorStatusesCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $authorVerified;

    /**
     * @example 1
     *
     * @var int
     */
    public $authorVerifyType;

    /**
     * @example ["xxx","yyy"]
     *
     * @var string
     */
    public $contentAudioText;

    /**
     * @example ["http://xx.mp3","http://yy.mp3"]
     *
     * @var string
     */
    public $contentAudioUrls;

    /**
     * @example ["xxx","yyy"]
     *
     * @var string
     */
    public $contentImageText;

    /**
     * @example ["http://xx.png","http://xx.jpeg"]
     *
     * @var string
     */
    public $contentImageUrls;

    /**
     * @example zh
     *
     * @var string
     */
    public $contentLang;

    /**
     * @example 100
     *
     * @var int
     */
    public $contentLen;

    /**
     * @example ["xxx","yyy"]
     *
     * @var string
     */
    public $contentVideoText;

    /**
     * @example ["http://xx.mpeg","http://yy.mp4"]
     *
     * @var string
     */
    public $contentVideoUrls;

    /**
     * @example 165202930291
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $docAnswersCount;

    /**
     * @var string[]
     */
    public $docAreas;

    /**
     * @example 100
     *
     * @var int
     */
    public $docCoinCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $docCommentsCount;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $docContent;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $docContentBrief;

    /**
     * @example 81728391712912
     *
     * @var string
     */
    public $docContentSign;

    /**
     * @example 48573837837232
     *
     * @var string
     */
    public $docId;

    /**
     * @example 100
     *
     * @var int
     */
    public $docLikesCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $docPlayCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $docReadingCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $docReadsCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $docRepostsCount;

    /**
     * @example 成都日报
     *
     * @var string
     */
    public $docReprintName;

    /**
     * @example 81728391712912
     *
     * @var string
     */
    public $docSelfContentSign;

    /**
     * @example xxx
     *
     * @var string
     */
    public $docTitle;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $docUrl;

    /**
     * @example 4.3
     *
     * @var float
     */
    public $emotionScore;

    /**
     * @example 1
     *
     * @var int
     */
    public $emotionType;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $finEventCount;

    /**
     * @var YuqingFinanceEvent[]
     */
    public $financeEventList;

    /**
     * @var string[]
     */
    public $highlightKeywords;

    /**
     * @example 1
     *
     * @var int
     */
    public $imageCount;

    /**
     * @example 4.1
     *
     * @var float
     */
    public $influenceScore;

    /**
     * @var string[]
     */
    public $mediaHosts;

    /**
     * @example 1
     *
     * @var int
     */
    public $mediaInfluenceLevel;

    /**
     * @example 新浪财经
     *
     * @var string
     */
    public $mediaName;

    /**
     * @example 1
     *
     * @var int
     */
    public $mediaPropagationLevel;

    /**
     * @example WEIBO-REPOST_WEIBO
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example COMMENT
     *
     * @var string
     */
    public $messageType;

    /**
     * @example 484747382721
     *
     * @var string
     */
    public $parentDocId;

    /**
     * @example 3.9
     *
     * @var float
     */
    public $propagationScore;

    /**
     * @example 165202930291
     *
     * @var int
     */
    public $publishTime;

    /**
     * @example 5.2
     *
     * @var float
     */
    public $relevanceScore;

    /**
     * @var string[]
     */
    public $reportMaterialTags;

    /**
     * @var string[]
     */
    public $repostList;

    /**
     * @example 12
     *
     * @var int
     */
    public $similarNumber;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @example 1
     *
     * @var int
     */
    public $videoCount;

    /**
     * @example 4837383832323
     *
     * @var string
     */
    public $weiboCommentId;

    /**
     * @example 465758363823
     *
     * @var string
     */
    public $weiboMid;
    protected $_name = [
        'appName'               => 'appName',
        'appScore'              => 'appScore',
        'appStoreName'          => 'appStoreName',
        'atAuthorNames'         => 'atAuthorNames',
        'audioCount'            => 'audioCount',
        'authorAvatarUrl'       => 'authorAvatarUrl',
        'authorFollowersCount'  => 'authorFollowersCount',
        'authorFriendsCount'    => 'authorFriendsCount',
        'authorGender'          => 'authorGender',
        'authorId'              => 'authorId',
        'authorLikesCount'      => 'authorLikesCount',
        'authorName'            => 'authorName',
        'authorProfileUrl'      => 'authorProfileUrl',
        'authorStatusesCount'   => 'authorStatusesCount',
        'authorVerified'        => 'authorVerified',
        'authorVerifyType'      => 'authorVerifyType',
        'contentAudioText'      => 'contentAudioText',
        'contentAudioUrls'      => 'contentAudioUrls',
        'contentImageText'      => 'contentImageText',
        'contentImageUrls'      => 'contentImageUrls',
        'contentLang'           => 'contentLang',
        'contentLen'            => 'contentLen',
        'contentVideoText'      => 'contentVideoText',
        'contentVideoUrls'      => 'contentVideoUrls',
        'createTime'            => 'createTime',
        'docAnswersCount'       => 'docAnswersCount',
        'docAreas'              => 'docAreas',
        'docCoinCount'          => 'docCoinCount',
        'docCommentsCount'      => 'docCommentsCount',
        'docContent'            => 'docContent',
        'docContentBrief'       => 'docContentBrief',
        'docContentSign'        => 'docContentSign',
        'docId'                 => 'docId',
        'docLikesCount'         => 'docLikesCount',
        'docPlayCount'          => 'docPlayCount',
        'docReadingCount'       => 'docReadingCount',
        'docReadsCount'         => 'docReadsCount',
        'docRepostsCount'       => 'docRepostsCount',
        'docReprintName'        => 'docReprintName',
        'docSelfContentSign'    => 'docSelfContentSign',
        'docTitle'              => 'docTitle',
        'docUrl'                => 'docUrl',
        'emotionScore'          => 'emotionScore',
        'emotionType'           => 'emotionType',
        'extInfo'               => 'extInfo',
        'finEventCount'         => 'finEventCount',
        'financeEventList'      => 'financeEventList',
        'highlightKeywords'     => 'highlightKeywords',
        'imageCount'            => 'imageCount',
        'influenceScore'        => 'influenceScore',
        'mediaHosts'            => 'mediaHosts',
        'mediaInfluenceLevel'   => 'mediaInfluenceLevel',
        'mediaName'             => 'mediaName',
        'mediaPropagationLevel' => 'mediaPropagationLevel',
        'mediaType'             => 'mediaType',
        'messageType'           => 'messageType',
        'parentDocId'           => 'parentDocId',
        'propagationScore'      => 'propagationScore',
        'publishTime'           => 'publishTime',
        'relevanceScore'        => 'relevanceScore',
        'reportMaterialTags'    => 'reportMaterialTags',
        'repostList'            => 'repostList',
        'similarNumber'         => 'similarNumber',
        'topics'                => 'topics',
        'videoCount'            => 'videoCount',
        'weiboCommentId'        => 'weiboCommentId',
        'weiboMid'              => 'weiboMid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->appScore) {
            $res['appScore'] = $this->appScore;
        }
        if (null !== $this->appStoreName) {
            $res['appStoreName'] = $this->appStoreName;
        }
        if (null !== $this->atAuthorNames) {
            $res['atAuthorNames'] = $this->atAuthorNames;
        }
        if (null !== $this->audioCount) {
            $res['audioCount'] = $this->audioCount;
        }
        if (null !== $this->authorAvatarUrl) {
            $res['authorAvatarUrl'] = $this->authorAvatarUrl;
        }
        if (null !== $this->authorFollowersCount) {
            $res['authorFollowersCount'] = $this->authorFollowersCount;
        }
        if (null !== $this->authorFriendsCount) {
            $res['authorFriendsCount'] = $this->authorFriendsCount;
        }
        if (null !== $this->authorGender) {
            $res['authorGender'] = $this->authorGender;
        }
        if (null !== $this->authorId) {
            $res['authorId'] = $this->authorId;
        }
        if (null !== $this->authorLikesCount) {
            $res['authorLikesCount'] = $this->authorLikesCount;
        }
        if (null !== $this->authorName) {
            $res['authorName'] = $this->authorName;
        }
        if (null !== $this->authorProfileUrl) {
            $res['authorProfileUrl'] = $this->authorProfileUrl;
        }
        if (null !== $this->authorStatusesCount) {
            $res['authorStatusesCount'] = $this->authorStatusesCount;
        }
        if (null !== $this->authorVerified) {
            $res['authorVerified'] = $this->authorVerified;
        }
        if (null !== $this->authorVerifyType) {
            $res['authorVerifyType'] = $this->authorVerifyType;
        }
        if (null !== $this->contentAudioText) {
            $res['contentAudioText'] = $this->contentAudioText;
        }
        if (null !== $this->contentAudioUrls) {
            $res['contentAudioUrls'] = $this->contentAudioUrls;
        }
        if (null !== $this->contentImageText) {
            $res['contentImageText'] = $this->contentImageText;
        }
        if (null !== $this->contentImageUrls) {
            $res['contentImageUrls'] = $this->contentImageUrls;
        }
        if (null !== $this->contentLang) {
            $res['contentLang'] = $this->contentLang;
        }
        if (null !== $this->contentLen) {
            $res['contentLen'] = $this->contentLen;
        }
        if (null !== $this->contentVideoText) {
            $res['contentVideoText'] = $this->contentVideoText;
        }
        if (null !== $this->contentVideoUrls) {
            $res['contentVideoUrls'] = $this->contentVideoUrls;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->docAnswersCount) {
            $res['docAnswersCount'] = $this->docAnswersCount;
        }
        if (null !== $this->docAreas) {
            $res['docAreas'] = $this->docAreas;
        }
        if (null !== $this->docCoinCount) {
            $res['docCoinCount'] = $this->docCoinCount;
        }
        if (null !== $this->docCommentsCount) {
            $res['docCommentsCount'] = $this->docCommentsCount;
        }
        if (null !== $this->docContent) {
            $res['docContent'] = $this->docContent;
        }
        if (null !== $this->docContentBrief) {
            $res['docContentBrief'] = $this->docContentBrief;
        }
        if (null !== $this->docContentSign) {
            $res['docContentSign'] = $this->docContentSign;
        }
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->docLikesCount) {
            $res['docLikesCount'] = $this->docLikesCount;
        }
        if (null !== $this->docPlayCount) {
            $res['docPlayCount'] = $this->docPlayCount;
        }
        if (null !== $this->docReadingCount) {
            $res['docReadingCount'] = $this->docReadingCount;
        }
        if (null !== $this->docReadsCount) {
            $res['docReadsCount'] = $this->docReadsCount;
        }
        if (null !== $this->docRepostsCount) {
            $res['docRepostsCount'] = $this->docRepostsCount;
        }
        if (null !== $this->docReprintName) {
            $res['docReprintName'] = $this->docReprintName;
        }
        if (null !== $this->docSelfContentSign) {
            $res['docSelfContentSign'] = $this->docSelfContentSign;
        }
        if (null !== $this->docTitle) {
            $res['docTitle'] = $this->docTitle;
        }
        if (null !== $this->docUrl) {
            $res['docUrl'] = $this->docUrl;
        }
        if (null !== $this->emotionScore) {
            $res['emotionScore'] = $this->emotionScore;
        }
        if (null !== $this->emotionType) {
            $res['emotionType'] = $this->emotionType;
        }
        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }
        if (null !== $this->finEventCount) {
            $res['finEventCount'] = $this->finEventCount;
        }
        if (null !== $this->financeEventList) {
            $res['financeEventList'] = [];
            if (null !== $this->financeEventList && \is_array($this->financeEventList)) {
                $n = 0;
                foreach ($this->financeEventList as $item) {
                    $res['financeEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->highlightKeywords) {
            $res['highlightKeywords'] = $this->highlightKeywords;
        }
        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }
        if (null !== $this->influenceScore) {
            $res['influenceScore'] = $this->influenceScore;
        }
        if (null !== $this->mediaHosts) {
            $res['mediaHosts'] = $this->mediaHosts;
        }
        if (null !== $this->mediaInfluenceLevel) {
            $res['mediaInfluenceLevel'] = $this->mediaInfluenceLevel;
        }
        if (null !== $this->mediaName) {
            $res['mediaName'] = $this->mediaName;
        }
        if (null !== $this->mediaPropagationLevel) {
            $res['mediaPropagationLevel'] = $this->mediaPropagationLevel;
        }
        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
        }
        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }
        if (null !== $this->parentDocId) {
            $res['parentDocId'] = $this->parentDocId;
        }
        if (null !== $this->propagationScore) {
            $res['propagationScore'] = $this->propagationScore;
        }
        if (null !== $this->publishTime) {
            $res['publishTime'] = $this->publishTime;
        }
        if (null !== $this->relevanceScore) {
            $res['relevanceScore'] = $this->relevanceScore;
        }
        if (null !== $this->reportMaterialTags) {
            $res['reportMaterialTags'] = $this->reportMaterialTags;
        }
        if (null !== $this->repostList) {
            $res['repostList'] = $this->repostList;
        }
        if (null !== $this->similarNumber) {
            $res['similarNumber'] = $this->similarNumber;
        }
        if (null !== $this->topics) {
            $res['topics'] = $this->topics;
        }
        if (null !== $this->videoCount) {
            $res['videoCount'] = $this->videoCount;
        }
        if (null !== $this->weiboCommentId) {
            $res['weiboCommentId'] = $this->weiboCommentId;
        }
        if (null !== $this->weiboMid) {
            $res['weiboMid'] = $this->weiboMid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return YuqingMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['appScore'])) {
            $model->appScore = $map['appScore'];
        }
        if (isset($map['appStoreName'])) {
            $model->appStoreName = $map['appStoreName'];
        }
        if (isset($map['atAuthorNames'])) {
            if (!empty($map['atAuthorNames'])) {
                $model->atAuthorNames = $map['atAuthorNames'];
            }
        }
        if (isset($map['audioCount'])) {
            $model->audioCount = $map['audioCount'];
        }
        if (isset($map['authorAvatarUrl'])) {
            $model->authorAvatarUrl = $map['authorAvatarUrl'];
        }
        if (isset($map['authorFollowersCount'])) {
            $model->authorFollowersCount = $map['authorFollowersCount'];
        }
        if (isset($map['authorFriendsCount'])) {
            $model->authorFriendsCount = $map['authorFriendsCount'];
        }
        if (isset($map['authorGender'])) {
            $model->authorGender = $map['authorGender'];
        }
        if (isset($map['authorId'])) {
            $model->authorId = $map['authorId'];
        }
        if (isset($map['authorLikesCount'])) {
            $model->authorLikesCount = $map['authorLikesCount'];
        }
        if (isset($map['authorName'])) {
            $model->authorName = $map['authorName'];
        }
        if (isset($map['authorProfileUrl'])) {
            $model->authorProfileUrl = $map['authorProfileUrl'];
        }
        if (isset($map['authorStatusesCount'])) {
            $model->authorStatusesCount = $map['authorStatusesCount'];
        }
        if (isset($map['authorVerified'])) {
            $model->authorVerified = $map['authorVerified'];
        }
        if (isset($map['authorVerifyType'])) {
            $model->authorVerifyType = $map['authorVerifyType'];
        }
        if (isset($map['contentAudioText'])) {
            $model->contentAudioText = $map['contentAudioText'];
        }
        if (isset($map['contentAudioUrls'])) {
            $model->contentAudioUrls = $map['contentAudioUrls'];
        }
        if (isset($map['contentImageText'])) {
            $model->contentImageText = $map['contentImageText'];
        }
        if (isset($map['contentImageUrls'])) {
            $model->contentImageUrls = $map['contentImageUrls'];
        }
        if (isset($map['contentLang'])) {
            $model->contentLang = $map['contentLang'];
        }
        if (isset($map['contentLen'])) {
            $model->contentLen = $map['contentLen'];
        }
        if (isset($map['contentVideoText'])) {
            $model->contentVideoText = $map['contentVideoText'];
        }
        if (isset($map['contentVideoUrls'])) {
            $model->contentVideoUrls = $map['contentVideoUrls'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['docAnswersCount'])) {
            $model->docAnswersCount = $map['docAnswersCount'];
        }
        if (isset($map['docAreas'])) {
            if (!empty($map['docAreas'])) {
                $model->docAreas = $map['docAreas'];
            }
        }
        if (isset($map['docCoinCount'])) {
            $model->docCoinCount = $map['docCoinCount'];
        }
        if (isset($map['docCommentsCount'])) {
            $model->docCommentsCount = $map['docCommentsCount'];
        }
        if (isset($map['docContent'])) {
            $model->docContent = $map['docContent'];
        }
        if (isset($map['docContentBrief'])) {
            $model->docContentBrief = $map['docContentBrief'];
        }
        if (isset($map['docContentSign'])) {
            $model->docContentSign = $map['docContentSign'];
        }
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['docLikesCount'])) {
            $model->docLikesCount = $map['docLikesCount'];
        }
        if (isset($map['docPlayCount'])) {
            $model->docPlayCount = $map['docPlayCount'];
        }
        if (isset($map['docReadingCount'])) {
            $model->docReadingCount = $map['docReadingCount'];
        }
        if (isset($map['docReadsCount'])) {
            $model->docReadsCount = $map['docReadsCount'];
        }
        if (isset($map['docRepostsCount'])) {
            $model->docRepostsCount = $map['docRepostsCount'];
        }
        if (isset($map['docReprintName'])) {
            $model->docReprintName = $map['docReprintName'];
        }
        if (isset($map['docSelfContentSign'])) {
            $model->docSelfContentSign = $map['docSelfContentSign'];
        }
        if (isset($map['docTitle'])) {
            $model->docTitle = $map['docTitle'];
        }
        if (isset($map['docUrl'])) {
            $model->docUrl = $map['docUrl'];
        }
        if (isset($map['emotionScore'])) {
            $model->emotionScore = $map['emotionScore'];
        }
        if (isset($map['emotionType'])) {
            $model->emotionType = $map['emotionType'];
        }
        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }
        if (isset($map['finEventCount'])) {
            $model->finEventCount = $map['finEventCount'];
        }
        if (isset($map['financeEventList'])) {
            if (!empty($map['financeEventList'])) {
                $model->financeEventList = [];
                $n                       = 0;
                foreach ($map['financeEventList'] as $item) {
                    $model->financeEventList[$n++] = null !== $item ? YuqingFinanceEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['highlightKeywords'])) {
            if (!empty($map['highlightKeywords'])) {
                $model->highlightKeywords = $map['highlightKeywords'];
            }
        }
        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }
        if (isset($map['influenceScore'])) {
            $model->influenceScore = $map['influenceScore'];
        }
        if (isset($map['mediaHosts'])) {
            if (!empty($map['mediaHosts'])) {
                $model->mediaHosts = $map['mediaHosts'];
            }
        }
        if (isset($map['mediaInfluenceLevel'])) {
            $model->mediaInfluenceLevel = $map['mediaInfluenceLevel'];
        }
        if (isset($map['mediaName'])) {
            $model->mediaName = $map['mediaName'];
        }
        if (isset($map['mediaPropagationLevel'])) {
            $model->mediaPropagationLevel = $map['mediaPropagationLevel'];
        }
        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }
        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }
        if (isset($map['parentDocId'])) {
            $model->parentDocId = $map['parentDocId'];
        }
        if (isset($map['propagationScore'])) {
            $model->propagationScore = $map['propagationScore'];
        }
        if (isset($map['publishTime'])) {
            $model->publishTime = $map['publishTime'];
        }
        if (isset($map['relevanceScore'])) {
            $model->relevanceScore = $map['relevanceScore'];
        }
        if (isset($map['reportMaterialTags'])) {
            if (!empty($map['reportMaterialTags'])) {
                $model->reportMaterialTags = $map['reportMaterialTags'];
            }
        }
        if (isset($map['repostList'])) {
            if (!empty($map['repostList'])) {
                $model->repostList = $map['repostList'];
            }
        }
        if (isset($map['similarNumber'])) {
            $model->similarNumber = $map['similarNumber'];
        }
        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = $map['topics'];
            }
        }
        if (isset($map['videoCount'])) {
            $model->videoCount = $map['videoCount'];
        }
        if (isset($map['weiboCommentId'])) {
            $model->weiboCommentId = $map['weiboCommentId'];
        }
        if (isset($map['weiboMid'])) {
            $model->weiboMid = $map['weiboMid'];
        }

        return $model;
    }
}
