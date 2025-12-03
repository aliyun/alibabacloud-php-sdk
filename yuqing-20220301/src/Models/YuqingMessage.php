<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class YuqingMessage extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appScore;

    /**
     * @var string
     */
    public $appStoreName;

    /**
     * @var string[]
     */
    public $atAuthorNames;

    /**
     * @var int
     */
    public $audioCount;

    /**
     * @var string
     */
    public $authorAvatarUrl;

    /**
     * @var int
     */
    public $authorFollowersCount;

    /**
     * @var int
     */
    public $authorFriendsCount;

    /**
     * @var string
     */
    public $authorGender;

    /**
     * @var string
     */
    public $authorId;

    /**
     * @var int
     */
    public $authorLikesCount;

    /**
     * @var string
     */
    public $authorName;

    /**
     * @var string
     */
    public $authorProfileUrl;

    /**
     * @var int
     */
    public $authorStatusesCount;

    /**
     * @var bool
     */
    public $authorVerified;

    /**
     * @var int
     */
    public $authorVerifyType;

    /**
     * @var string
     */
    public $contentAudioText;

    /**
     * @var string
     */
    public $contentAudioUrls;

    /**
     * @var string
     */
    public $contentImageText;

    /**
     * @var string
     */
    public $contentImageUrls;

    /**
     * @var string
     */
    public $contentLang;

    /**
     * @var int
     */
    public $contentLen;

    /**
     * @var string
     */
    public $contentVideoText;

    /**
     * @var string
     */
    public $contentVideoUrls;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $docAnswersCount;

    /**
     * @var string[]
     */
    public $docAreas;

    /**
     * @var int
     */
    public $docCoinCount;

    /**
     * @var int
     */
    public $docCommentsCount;

    /**
     * @var string
     */
    public $docContent;

    /**
     * @var string
     */
    public $docContentBrief;

    /**
     * @var string
     */
    public $docContentSign;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var int
     */
    public $docLikesCount;

    /**
     * @var int
     */
    public $docPlayCount;

    /**
     * @var int
     */
    public $docReadingCount;

    /**
     * @var int
     */
    public $docReadsCount;

    /**
     * @var int
     */
    public $docRepostsCount;

    /**
     * @var string
     */
    public $docReprintName;

    /**
     * @var string
     */
    public $docSelfContentSign;

    /**
     * @var string
     */
    public $docTitle;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var float
     */
    public $emotionScore;

    /**
     * @var int
     */
    public $emotionType;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
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
     * @var int
     */
    public $imageCount;

    /**
     * @var float
     */
    public $influenceScore;

    /**
     * @var string[]
     */
    public $mediaHosts;

    /**
     * @var int
     */
    public $mediaInfluenceLevel;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var int
     */
    public $mediaPropagationLevel;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $parentDocId;

    /**
     * @var float
     */
    public $propagationScore;

    /**
     * @var int
     */
    public $publishTime;

    /**
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
     * @var int
     */
    public $similarNumber;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @var int
     */
    public $videoCount;

    /**
     * @var string
     */
    public $weiboCommentId;

    /**
     * @var string
     */
    public $weiboMid;
    protected $_name = [
        'appName' => 'appName',
        'appScore' => 'appScore',
        'appStoreName' => 'appStoreName',
        'atAuthorNames' => 'atAuthorNames',
        'audioCount' => 'audioCount',
        'authorAvatarUrl' => 'authorAvatarUrl',
        'authorFollowersCount' => 'authorFollowersCount',
        'authorFriendsCount' => 'authorFriendsCount',
        'authorGender' => 'authorGender',
        'authorId' => 'authorId',
        'authorLikesCount' => 'authorLikesCount',
        'authorName' => 'authorName',
        'authorProfileUrl' => 'authorProfileUrl',
        'authorStatusesCount' => 'authorStatusesCount',
        'authorVerified' => 'authorVerified',
        'authorVerifyType' => 'authorVerifyType',
        'contentAudioText' => 'contentAudioText',
        'contentAudioUrls' => 'contentAudioUrls',
        'contentImageText' => 'contentImageText',
        'contentImageUrls' => 'contentImageUrls',
        'contentLang' => 'contentLang',
        'contentLen' => 'contentLen',
        'contentVideoText' => 'contentVideoText',
        'contentVideoUrls' => 'contentVideoUrls',
        'createTime' => 'createTime',
        'docAnswersCount' => 'docAnswersCount',
        'docAreas' => 'docAreas',
        'docCoinCount' => 'docCoinCount',
        'docCommentsCount' => 'docCommentsCount',
        'docContent' => 'docContent',
        'docContentBrief' => 'docContentBrief',
        'docContentSign' => 'docContentSign',
        'docId' => 'docId',
        'docLikesCount' => 'docLikesCount',
        'docPlayCount' => 'docPlayCount',
        'docReadingCount' => 'docReadingCount',
        'docReadsCount' => 'docReadsCount',
        'docRepostsCount' => 'docRepostsCount',
        'docReprintName' => 'docReprintName',
        'docSelfContentSign' => 'docSelfContentSign',
        'docTitle' => 'docTitle',
        'docUrl' => 'docUrl',
        'emotionScore' => 'emotionScore',
        'emotionType' => 'emotionType',
        'extInfo' => 'extInfo',
        'finEventCount' => 'finEventCount',
        'financeEventList' => 'financeEventList',
        'highlightKeywords' => 'highlightKeywords',
        'imageCount' => 'imageCount',
        'influenceScore' => 'influenceScore',
        'mediaHosts' => 'mediaHosts',
        'mediaInfluenceLevel' => 'mediaInfluenceLevel',
        'mediaName' => 'mediaName',
        'mediaPropagationLevel' => 'mediaPropagationLevel',
        'mediaType' => 'mediaType',
        'messageType' => 'messageType',
        'parentDocId' => 'parentDocId',
        'propagationScore' => 'propagationScore',
        'publishTime' => 'publishTime',
        'relevanceScore' => 'relevanceScore',
        'reportMaterialTags' => 'reportMaterialTags',
        'repostList' => 'repostList',
        'similarNumber' => 'similarNumber',
        'topics' => 'topics',
        'videoCount' => 'videoCount',
        'weiboCommentId' => 'weiboCommentId',
        'weiboMid' => 'weiboMid',
    ];

    public function validate()
    {
        if (\is_array($this->atAuthorNames)) {
            Model::validateArray($this->atAuthorNames);
        }
        if (\is_array($this->docAreas)) {
            Model::validateArray($this->docAreas);
        }
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (\is_array($this->financeEventList)) {
            Model::validateArray($this->financeEventList);
        }
        if (\is_array($this->highlightKeywords)) {
            Model::validateArray($this->highlightKeywords);
        }
        if (\is_array($this->mediaHosts)) {
            Model::validateArray($this->mediaHosts);
        }
        if (\is_array($this->reportMaterialTags)) {
            Model::validateArray($this->reportMaterialTags);
        }
        if (\is_array($this->repostList)) {
            Model::validateArray($this->repostList);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->atAuthorNames)) {
                $res['atAuthorNames'] = [];
                $n1 = 0;
                foreach ($this->atAuthorNames as $item1) {
                    $res['atAuthorNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->docAreas)) {
                $res['docAreas'] = [];
                $n1 = 0;
                foreach ($this->docAreas as $item1) {
                    $res['docAreas'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['extInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->finEventCount) {
            $res['finEventCount'] = $this->finEventCount;
        }

        if (null !== $this->financeEventList) {
            if (\is_array($this->financeEventList)) {
                $res['financeEventList'] = [];
                $n1 = 0;
                foreach ($this->financeEventList as $item1) {
                    $res['financeEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->highlightKeywords) {
            if (\is_array($this->highlightKeywords)) {
                $res['highlightKeywords'] = [];
                $n1 = 0;
                foreach ($this->highlightKeywords as $item1) {
                    $res['highlightKeywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->influenceScore) {
            $res['influenceScore'] = $this->influenceScore;
        }

        if (null !== $this->mediaHosts) {
            if (\is_array($this->mediaHosts)) {
                $res['mediaHosts'] = [];
                $n1 = 0;
                foreach ($this->mediaHosts as $item1) {
                    $res['mediaHosts'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->reportMaterialTags)) {
                $res['reportMaterialTags'] = [];
                $n1 = 0;
                foreach ($this->reportMaterialTags as $item1) {
                    $res['reportMaterialTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repostList) {
            if (\is_array($this->repostList)) {
                $res['repostList'] = [];
                $n1 = 0;
                foreach ($this->repostList as $item1) {
                    $res['repostList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->similarNumber) {
            $res['similarNumber'] = $this->similarNumber;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['topics'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->atAuthorNames = [];
                $n1 = 0;
                foreach ($map['atAuthorNames'] as $item1) {
                    $model->atAuthorNames[$n1] = $item1;
                    ++$n1;
                }
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
                $model->docAreas = [];
                $n1 = 0;
                foreach ($map['docAreas'] as $item1) {
                    $model->docAreas[$n1] = $item1;
                    ++$n1;
                }
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
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                foreach ($map['extInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['finEventCount'])) {
            $model->finEventCount = $map['finEventCount'];
        }

        if (isset($map['financeEventList'])) {
            if (!empty($map['financeEventList'])) {
                $model->financeEventList = [];
                $n1 = 0;
                foreach ($map['financeEventList'] as $item1) {
                    $model->financeEventList[$n1] = YuqingFinanceEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['highlightKeywords'])) {
            if (!empty($map['highlightKeywords'])) {
                $model->highlightKeywords = [];
                $n1 = 0;
                foreach ($map['highlightKeywords'] as $item1) {
                    $model->highlightKeywords[$n1] = $item1;
                    ++$n1;
                }
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
                $model->mediaHosts = [];
                $n1 = 0;
                foreach ($map['mediaHosts'] as $item1) {
                    $model->mediaHosts[$n1] = $item1;
                    ++$n1;
                }
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
                $model->reportMaterialTags = [];
                $n1 = 0;
                foreach ($map['reportMaterialTags'] as $item1) {
                    $model->reportMaterialTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['repostList'])) {
            if (!empty($map['repostList'])) {
                $model->repostList = [];
                $n1 = 0;
                foreach ($map['repostList'] as $item1) {
                    $model->repostList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['similarNumber'])) {
            $model->similarNumber = $map['similarNumber'];
        }

        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
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
