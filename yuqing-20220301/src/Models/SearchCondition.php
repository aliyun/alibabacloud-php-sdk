<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchCondition extends Model
{
    /**
     * @example ["A&&B","C"]
     *
     * @var string[]
     */
    public $assKeywordList;

    /**
     * @example xxx
     *
     * @var string[]
     */
    public $atAuthorNameList;

    /**
     * @example xxx
     *
     * @var string[]
     */
    public $authorNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $commentsLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentLenLevel;

    /**
     * @example 1620452881429
     *
     * @var int
     */
    public $createTimeEnd;

    /**
     * @example 1610452881429
     *
     * @var int
     */
    public $createTimeStart;

    /**
     * @example 3478278371214
     *
     * @var string
     */
    public $docContentSign;

    /**
     * @example 5747368272834931
     *
     * @var string[]
     */
    public $docIdList;

    /**
     * @example true
     *
     * @var bool
     */
    public $duplicateRemoval;

    /**
     * @example 1
     *
     * @var int
     */
    public $emotionType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableKeywordHighlight;

    /**
     * @example xxx
     *
     * @var string[]
     */
    public $excludeAtAuthorNameList;

    /**
     * @example 新浪财经
     *
     * @var string[]
     */
    public $excludeAuthorNameList;

    /**
     * @example finance.sina.com.cn
     *
     * @var string[]
     */
    public $excludeHostNameList;

    /**
     * @example ["A&&B","C"]
     *
     * @var string[]
     */
    public $excludeKeywordList;

    /**
     * @example ["A&&B","C"]
     *
     * @var string[]
     */
    public $excludeKeywordListInTitle;

    /**
     * @example 123,456
     *
     * @var int[]
     */
    public $excludeKeywordTagIds;

    /**
     * @var string[]
     */
    public $excludeMaterialTagList;

    /**
     * @example 123,456
     *
     * @var string[]
     */
    public $excludeMediaLibraryIdList;

    /**
     * @example 新浪财经
     *
     * @var string[]
     */
    public $excludeMediaNameList;

    /**
     * @example WEIBO-REPOST_WEIBO
     *
     * @var string[]
     */
    public $excludeMediaTypeList;

    /**
     * @example COMMENT
     *
     * @var string[]
     */
    public $excludeMessageTypeList;

    /**
     * @var FieldCondition[]
     */
    public $fieldConditions;

    /**
     * @example 12345
     *
     * @var int
     */
    public $filterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasAudio;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasImage;

    /**
     * @var bool
     */
    public $hasMultiModeContent;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasVideo;

    /**
     * @example finance.sina.com.cn
     *
     * @var string[]
     */
    public $hostNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $influenceLevel;

    /**
     * @example 123,456
     *
     * @var int[]
     */
    public $keywordTagIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $likesLevel;

    /**
     * @var string[]
     */
    public $materialTagList;

    /**
     * @example 123,456
     *
     * @var string[]
     */
    public $mediaLibraryIdList;

    /**
     * @example 新浪财经
     *
     * @var string[]
     */
    public $mediaNameList;

    /**
     * @example WEIBO-REPOST_WEIBO
     *
     * @var string[]
     */
    public $mediaTypeList;

    /**
     * @example COMMENT
     *
     * @var string[]
     */
    public $messageTypeList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNow;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 485738373837374
     *
     * @var string
     */
    public $parentDocId;

    /**
     * @example ["A&&B","C"]
     *
     * @var string[]
     */
    public $posKeywordList;

    /**
     * @example ["A&&B","C"]
     *
     * @var string[]
     */
    public $posKeywordListInTitle;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1
     *
     * @var int
     */
    public $propagationLevel;

    /**
     * @example 1620452881429
     *
     * @var int
     */
    public $publishTimeEnd;

    /**
     * @example 1610452881429
     *
     * @var int
     */
    public $publishTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $readsLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $relevanceLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $repostLevel;

    /**
     * @example PUBLISH_TIME
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example +
     *
     * @var string
     */
    public $sortByDirection;

    /**
     * @example #xxxx#
     *
     * @var string[]
     */
    public $topicList;

    /**
     * @example 1620452881429
     *
     * @var int
     */
    public $updateTimeEnd;

    /**
     * @example 1610452881429
     *
     * @var int
     */
    public $updateTimeStart;
    protected $_name = [
        'assKeywordList'            => 'assKeywordList',
        'atAuthorNameList'          => 'atAuthorNameList',
        'authorNameList'            => 'authorNameList',
        'commentsLevel'             => 'commentsLevel',
        'contentLenLevel'           => 'contentLenLevel',
        'createTimeEnd'             => 'createTimeEnd',
        'createTimeStart'           => 'createTimeStart',
        'docContentSign'            => 'docContentSign',
        'docIdList'                 => 'docIdList',
        'duplicateRemoval'          => 'duplicateRemoval',
        'emotionType'               => 'emotionType',
        'enableKeywordHighlight'    => 'enableKeywordHighlight',
        'excludeAtAuthorNameList'   => 'excludeAtAuthorNameList',
        'excludeAuthorNameList'     => 'excludeAuthorNameList',
        'excludeHostNameList'       => 'excludeHostNameList',
        'excludeKeywordList'        => 'excludeKeywordList',
        'excludeKeywordListInTitle' => 'excludeKeywordListInTitle',
        'excludeKeywordTagIds'      => 'excludeKeywordTagIds',
        'excludeMaterialTagList'    => 'excludeMaterialTagList',
        'excludeMediaLibraryIdList' => 'excludeMediaLibraryIdList',
        'excludeMediaNameList'      => 'excludeMediaNameList',
        'excludeMediaTypeList'      => 'excludeMediaTypeList',
        'excludeMessageTypeList'    => 'excludeMessageTypeList',
        'fieldConditions'           => 'fieldConditions',
        'filterId'                  => 'filterId',
        'hasAudio'                  => 'hasAudio',
        'hasImage'                  => 'hasImage',
        'hasMultiModeContent'       => 'hasMultiModeContent',
        'hasVideo'                  => 'hasVideo',
        'hostNameList'              => 'hostNameList',
        'influenceLevel'            => 'influenceLevel',
        'keywordTagIds'             => 'keywordTagIds',
        'likesLevel'                => 'likesLevel',
        'materialTagList'           => 'materialTagList',
        'mediaLibraryIdList'        => 'mediaLibraryIdList',
        'mediaNameList'             => 'mediaNameList',
        'mediaTypeList'             => 'mediaTypeList',
        'messageTypeList'           => 'messageTypeList',
        'pageNow'                   => 'pageNow',
        'pageSize'                  => 'pageSize',
        'parentDocId'               => 'parentDocId',
        'posKeywordList'            => 'posKeywordList',
        'posKeywordListInTitle'     => 'posKeywordListInTitle',
        'projectId'                 => 'projectId',
        'propagationLevel'          => 'propagationLevel',
        'publishTimeEnd'            => 'publishTimeEnd',
        'publishTimeStart'          => 'publishTimeStart',
        'readsLevel'                => 'readsLevel',
        'relevanceLevel'            => 'relevanceLevel',
        'repostLevel'               => 'repostLevel',
        'sortBy'                    => 'sortBy',
        'sortByDirection'           => 'sortByDirection',
        'topicList'                 => 'topicList',
        'updateTimeEnd'             => 'updateTimeEnd',
        'updateTimeStart'           => 'updateTimeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assKeywordList) {
            $res['assKeywordList'] = $this->assKeywordList;
        }
        if (null !== $this->atAuthorNameList) {
            $res['atAuthorNameList'] = $this->atAuthorNameList;
        }
        if (null !== $this->authorNameList) {
            $res['authorNameList'] = $this->authorNameList;
        }
        if (null !== $this->commentsLevel) {
            $res['commentsLevel'] = $this->commentsLevel;
        }
        if (null !== $this->contentLenLevel) {
            $res['contentLenLevel'] = $this->contentLenLevel;
        }
        if (null !== $this->createTimeEnd) {
            $res['createTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['createTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->docContentSign) {
            $res['docContentSign'] = $this->docContentSign;
        }
        if (null !== $this->docIdList) {
            $res['docIdList'] = $this->docIdList;
        }
        if (null !== $this->duplicateRemoval) {
            $res['duplicateRemoval'] = $this->duplicateRemoval;
        }
        if (null !== $this->emotionType) {
            $res['emotionType'] = $this->emotionType;
        }
        if (null !== $this->enableKeywordHighlight) {
            $res['enableKeywordHighlight'] = $this->enableKeywordHighlight;
        }
        if (null !== $this->excludeAtAuthorNameList) {
            $res['excludeAtAuthorNameList'] = $this->excludeAtAuthorNameList;
        }
        if (null !== $this->excludeAuthorNameList) {
            $res['excludeAuthorNameList'] = $this->excludeAuthorNameList;
        }
        if (null !== $this->excludeHostNameList) {
            $res['excludeHostNameList'] = $this->excludeHostNameList;
        }
        if (null !== $this->excludeKeywordList) {
            $res['excludeKeywordList'] = $this->excludeKeywordList;
        }
        if (null !== $this->excludeKeywordListInTitle) {
            $res['excludeKeywordListInTitle'] = $this->excludeKeywordListInTitle;
        }
        if (null !== $this->excludeKeywordTagIds) {
            $res['excludeKeywordTagIds'] = $this->excludeKeywordTagIds;
        }
        if (null !== $this->excludeMaterialTagList) {
            $res['excludeMaterialTagList'] = $this->excludeMaterialTagList;
        }
        if (null !== $this->excludeMediaLibraryIdList) {
            $res['excludeMediaLibraryIdList'] = $this->excludeMediaLibraryIdList;
        }
        if (null !== $this->excludeMediaNameList) {
            $res['excludeMediaNameList'] = $this->excludeMediaNameList;
        }
        if (null !== $this->excludeMediaTypeList) {
            $res['excludeMediaTypeList'] = $this->excludeMediaTypeList;
        }
        if (null !== $this->excludeMessageTypeList) {
            $res['excludeMessageTypeList'] = $this->excludeMessageTypeList;
        }
        if (null !== $this->fieldConditions) {
            $res['fieldConditions'] = [];
            if (null !== $this->fieldConditions && \is_array($this->fieldConditions)) {
                $n = 0;
                foreach ($this->fieldConditions as $item) {
                    $res['fieldConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->filterId) {
            $res['filterId'] = $this->filterId;
        }
        if (null !== $this->hasAudio) {
            $res['hasAudio'] = $this->hasAudio;
        }
        if (null !== $this->hasImage) {
            $res['hasImage'] = $this->hasImage;
        }
        if (null !== $this->hasMultiModeContent) {
            $res['hasMultiModeContent'] = $this->hasMultiModeContent;
        }
        if (null !== $this->hasVideo) {
            $res['hasVideo'] = $this->hasVideo;
        }
        if (null !== $this->hostNameList) {
            $res['hostNameList'] = $this->hostNameList;
        }
        if (null !== $this->influenceLevel) {
            $res['influenceLevel'] = $this->influenceLevel;
        }
        if (null !== $this->keywordTagIds) {
            $res['keywordTagIds'] = $this->keywordTagIds;
        }
        if (null !== $this->likesLevel) {
            $res['likesLevel'] = $this->likesLevel;
        }
        if (null !== $this->materialTagList) {
            $res['materialTagList'] = $this->materialTagList;
        }
        if (null !== $this->mediaLibraryIdList) {
            $res['mediaLibraryIdList'] = $this->mediaLibraryIdList;
        }
        if (null !== $this->mediaNameList) {
            $res['mediaNameList'] = $this->mediaNameList;
        }
        if (null !== $this->mediaTypeList) {
            $res['mediaTypeList'] = $this->mediaTypeList;
        }
        if (null !== $this->messageTypeList) {
            $res['messageTypeList'] = $this->messageTypeList;
        }
        if (null !== $this->pageNow) {
            $res['pageNow'] = $this->pageNow;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->parentDocId) {
            $res['parentDocId'] = $this->parentDocId;
        }
        if (null !== $this->posKeywordList) {
            $res['posKeywordList'] = $this->posKeywordList;
        }
        if (null !== $this->posKeywordListInTitle) {
            $res['posKeywordListInTitle'] = $this->posKeywordListInTitle;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->propagationLevel) {
            $res['propagationLevel'] = $this->propagationLevel;
        }
        if (null !== $this->publishTimeEnd) {
            $res['publishTimeEnd'] = $this->publishTimeEnd;
        }
        if (null !== $this->publishTimeStart) {
            $res['publishTimeStart'] = $this->publishTimeStart;
        }
        if (null !== $this->readsLevel) {
            $res['readsLevel'] = $this->readsLevel;
        }
        if (null !== $this->relevanceLevel) {
            $res['relevanceLevel'] = $this->relevanceLevel;
        }
        if (null !== $this->repostLevel) {
            $res['repostLevel'] = $this->repostLevel;
        }
        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }
        if (null !== $this->sortByDirection) {
            $res['sortByDirection'] = $this->sortByDirection;
        }
        if (null !== $this->topicList) {
            $res['topicList'] = $this->topicList;
        }
        if (null !== $this->updateTimeEnd) {
            $res['updateTimeEnd'] = $this->updateTimeEnd;
        }
        if (null !== $this->updateTimeStart) {
            $res['updateTimeStart'] = $this->updateTimeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assKeywordList'])) {
            if (!empty($map['assKeywordList'])) {
                $model->assKeywordList = $map['assKeywordList'];
            }
        }
        if (isset($map['atAuthorNameList'])) {
            if (!empty($map['atAuthorNameList'])) {
                $model->atAuthorNameList = $map['atAuthorNameList'];
            }
        }
        if (isset($map['authorNameList'])) {
            if (!empty($map['authorNameList'])) {
                $model->authorNameList = $map['authorNameList'];
            }
        }
        if (isset($map['commentsLevel'])) {
            $model->commentsLevel = $map['commentsLevel'];
        }
        if (isset($map['contentLenLevel'])) {
            $model->contentLenLevel = $map['contentLenLevel'];
        }
        if (isset($map['createTimeEnd'])) {
            $model->createTimeEnd = $map['createTimeEnd'];
        }
        if (isset($map['createTimeStart'])) {
            $model->createTimeStart = $map['createTimeStart'];
        }
        if (isset($map['docContentSign'])) {
            $model->docContentSign = $map['docContentSign'];
        }
        if (isset($map['docIdList'])) {
            if (!empty($map['docIdList'])) {
                $model->docIdList = $map['docIdList'];
            }
        }
        if (isset($map['duplicateRemoval'])) {
            $model->duplicateRemoval = $map['duplicateRemoval'];
        }
        if (isset($map['emotionType'])) {
            $model->emotionType = $map['emotionType'];
        }
        if (isset($map['enableKeywordHighlight'])) {
            $model->enableKeywordHighlight = $map['enableKeywordHighlight'];
        }
        if (isset($map['excludeAtAuthorNameList'])) {
            if (!empty($map['excludeAtAuthorNameList'])) {
                $model->excludeAtAuthorNameList = $map['excludeAtAuthorNameList'];
            }
        }
        if (isset($map['excludeAuthorNameList'])) {
            if (!empty($map['excludeAuthorNameList'])) {
                $model->excludeAuthorNameList = $map['excludeAuthorNameList'];
            }
        }
        if (isset($map['excludeHostNameList'])) {
            if (!empty($map['excludeHostNameList'])) {
                $model->excludeHostNameList = $map['excludeHostNameList'];
            }
        }
        if (isset($map['excludeKeywordList'])) {
            if (!empty($map['excludeKeywordList'])) {
                $model->excludeKeywordList = $map['excludeKeywordList'];
            }
        }
        if (isset($map['excludeKeywordListInTitle'])) {
            if (!empty($map['excludeKeywordListInTitle'])) {
                $model->excludeKeywordListInTitle = $map['excludeKeywordListInTitle'];
            }
        }
        if (isset($map['excludeKeywordTagIds'])) {
            if (!empty($map['excludeKeywordTagIds'])) {
                $model->excludeKeywordTagIds = $map['excludeKeywordTagIds'];
            }
        }
        if (isset($map['excludeMaterialTagList'])) {
            if (!empty($map['excludeMaterialTagList'])) {
                $model->excludeMaterialTagList = $map['excludeMaterialTagList'];
            }
        }
        if (isset($map['excludeMediaLibraryIdList'])) {
            if (!empty($map['excludeMediaLibraryIdList'])) {
                $model->excludeMediaLibraryIdList = $map['excludeMediaLibraryIdList'];
            }
        }
        if (isset($map['excludeMediaNameList'])) {
            if (!empty($map['excludeMediaNameList'])) {
                $model->excludeMediaNameList = $map['excludeMediaNameList'];
            }
        }
        if (isset($map['excludeMediaTypeList'])) {
            if (!empty($map['excludeMediaTypeList'])) {
                $model->excludeMediaTypeList = $map['excludeMediaTypeList'];
            }
        }
        if (isset($map['excludeMessageTypeList'])) {
            if (!empty($map['excludeMessageTypeList'])) {
                $model->excludeMessageTypeList = $map['excludeMessageTypeList'];
            }
        }
        if (isset($map['fieldConditions'])) {
            if (!empty($map['fieldConditions'])) {
                $model->fieldConditions = [];
                $n                      = 0;
                foreach ($map['fieldConditions'] as $item) {
                    $model->fieldConditions[$n++] = null !== $item ? FieldCondition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['filterId'])) {
            $model->filterId = $map['filterId'];
        }
        if (isset($map['hasAudio'])) {
            $model->hasAudio = $map['hasAudio'];
        }
        if (isset($map['hasImage'])) {
            $model->hasImage = $map['hasImage'];
        }
        if (isset($map['hasMultiModeContent'])) {
            $model->hasMultiModeContent = $map['hasMultiModeContent'];
        }
        if (isset($map['hasVideo'])) {
            $model->hasVideo = $map['hasVideo'];
        }
        if (isset($map['hostNameList'])) {
            if (!empty($map['hostNameList'])) {
                $model->hostNameList = $map['hostNameList'];
            }
        }
        if (isset($map['influenceLevel'])) {
            $model->influenceLevel = $map['influenceLevel'];
        }
        if (isset($map['keywordTagIds'])) {
            if (!empty($map['keywordTagIds'])) {
                $model->keywordTagIds = $map['keywordTagIds'];
            }
        }
        if (isset($map['likesLevel'])) {
            $model->likesLevel = $map['likesLevel'];
        }
        if (isset($map['materialTagList'])) {
            if (!empty($map['materialTagList'])) {
                $model->materialTagList = $map['materialTagList'];
            }
        }
        if (isset($map['mediaLibraryIdList'])) {
            if (!empty($map['mediaLibraryIdList'])) {
                $model->mediaLibraryIdList = $map['mediaLibraryIdList'];
            }
        }
        if (isset($map['mediaNameList'])) {
            if (!empty($map['mediaNameList'])) {
                $model->mediaNameList = $map['mediaNameList'];
            }
        }
        if (isset($map['mediaTypeList'])) {
            if (!empty($map['mediaTypeList'])) {
                $model->mediaTypeList = $map['mediaTypeList'];
            }
        }
        if (isset($map['messageTypeList'])) {
            if (!empty($map['messageTypeList'])) {
                $model->messageTypeList = $map['messageTypeList'];
            }
        }
        if (isset($map['pageNow'])) {
            $model->pageNow = $map['pageNow'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['parentDocId'])) {
            $model->parentDocId = $map['parentDocId'];
        }
        if (isset($map['posKeywordList'])) {
            if (!empty($map['posKeywordList'])) {
                $model->posKeywordList = $map['posKeywordList'];
            }
        }
        if (isset($map['posKeywordListInTitle'])) {
            if (!empty($map['posKeywordListInTitle'])) {
                $model->posKeywordListInTitle = $map['posKeywordListInTitle'];
            }
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['propagationLevel'])) {
            $model->propagationLevel = $map['propagationLevel'];
        }
        if (isset($map['publishTimeEnd'])) {
            $model->publishTimeEnd = $map['publishTimeEnd'];
        }
        if (isset($map['publishTimeStart'])) {
            $model->publishTimeStart = $map['publishTimeStart'];
        }
        if (isset($map['readsLevel'])) {
            $model->readsLevel = $map['readsLevel'];
        }
        if (isset($map['relevanceLevel'])) {
            $model->relevanceLevel = $map['relevanceLevel'];
        }
        if (isset($map['repostLevel'])) {
            $model->repostLevel = $map['repostLevel'];
        }
        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }
        if (isset($map['sortByDirection'])) {
            $model->sortByDirection = $map['sortByDirection'];
        }
        if (isset($map['topicList'])) {
            if (!empty($map['topicList'])) {
                $model->topicList = $map['topicList'];
            }
        }
        if (isset($map['updateTimeEnd'])) {
            $model->updateTimeEnd = $map['updateTimeEnd'];
        }
        if (isset($map['updateTimeStart'])) {
            $model->updateTimeStart = $map['updateTimeStart'];
        }

        return $model;
    }
}
