<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SearchCondition extends Model
{
    /**
     * @var string[]
     */
    public $assKeywordList;

    /**
     * @var string[]
     */
    public $atAuthorNameList;

    /**
     * @var string[]
     */
    public $authorNameList;

    /**
     * @var int
     */
    public $commentsLevel;

    /**
     * @var int
     */
    public $contentLenLevel;

    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

    /**
     * @var string
     */
    public $docContentSign;

    /**
     * @var string[]
     */
    public $docIdList;

    /**
     * @var bool
     */
    public $duplicateRemoval;

    /**
     * @var int
     */
    public $emotionType;

    /**
     * @var bool
     */
    public $enableKeywordHighlight;

    /**
     * @var string[]
     */
    public $excludeAtAuthorNameList;

    /**
     * @var string[]
     */
    public $excludeAuthorNameList;

    /**
     * @var string[]
     */
    public $excludeHostNameList;

    /**
     * @var string[]
     */
    public $excludeKeywordList;

    /**
     * @var string[]
     */
    public $excludeKeywordListInTitle;

    /**
     * @var int[]
     */
    public $excludeKeywordTagIds;

    /**
     * @var string[]
     */
    public $excludeMaterialTagList;

    /**
     * @var string[]
     */
    public $excludeMediaLibraryIdList;

    /**
     * @var string[]
     */
    public $excludeMediaNameList;

    /**
     * @var string[]
     */
    public $excludeMediaTypeList;

    /**
     * @var string[]
     */
    public $excludeMessageTypeList;

    /**
     * @var FieldCondition[]
     */
    public $fieldConditions;

    /**
     * @var int
     */
    public $filterId;

    /**
     * @var bool
     */
    public $hasAudio;

    /**
     * @var bool
     */
    public $hasImage;

    /**
     * @var bool
     */
    public $hasMultiModeContent;

    /**
     * @var bool
     */
    public $hasVideo;

    /**
     * @var string[]
     */
    public $hostNameList;

    /**
     * @var int
     */
    public $influenceLevel;

    /**
     * @var int[]
     */
    public $keywordTagIds;

    /**
     * @var int
     */
    public $likesLevel;

    /**
     * @var string[]
     */
    public $materialTagList;

    /**
     * @var string[]
     */
    public $mediaLibraryIdList;

    /**
     * @var string[]
     */
    public $mediaNameList;

    /**
     * @var string[]
     */
    public $mediaTypeList;

    /**
     * @var string[]
     */
    public $messageTypeList;

    /**
     * @var int
     */
    public $pageNow;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentDocId;

    /**
     * @var string[]
     */
    public $posKeywordList;

    /**
     * @var string[]
     */
    public $posKeywordListInTitle;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $propagationLevel;

    /**
     * @var int
     */
    public $publishTimeEnd;

    /**
     * @var int
     */
    public $publishTimeStart;

    /**
     * @var int
     */
    public $readsLevel;

    /**
     * @var int
     */
    public $relevanceLevel;

    /**
     * @var int
     */
    public $repostLevel;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortByDirection;

    /**
     * @var string[]
     */
    public $topicList;

    /**
     * @var int
     */
    public $updateTimeEnd;

    /**
     * @var int
     */
    public $updateTimeStart;
    protected $_name = [
        'assKeywordList' => 'assKeywordList',
        'atAuthorNameList' => 'atAuthorNameList',
        'authorNameList' => 'authorNameList',
        'commentsLevel' => 'commentsLevel',
        'contentLenLevel' => 'contentLenLevel',
        'createTimeEnd' => 'createTimeEnd',
        'createTimeStart' => 'createTimeStart',
        'docContentSign' => 'docContentSign',
        'docIdList' => 'docIdList',
        'duplicateRemoval' => 'duplicateRemoval',
        'emotionType' => 'emotionType',
        'enableKeywordHighlight' => 'enableKeywordHighlight',
        'excludeAtAuthorNameList' => 'excludeAtAuthorNameList',
        'excludeAuthorNameList' => 'excludeAuthorNameList',
        'excludeHostNameList' => 'excludeHostNameList',
        'excludeKeywordList' => 'excludeKeywordList',
        'excludeKeywordListInTitle' => 'excludeKeywordListInTitle',
        'excludeKeywordTagIds' => 'excludeKeywordTagIds',
        'excludeMaterialTagList' => 'excludeMaterialTagList',
        'excludeMediaLibraryIdList' => 'excludeMediaLibraryIdList',
        'excludeMediaNameList' => 'excludeMediaNameList',
        'excludeMediaTypeList' => 'excludeMediaTypeList',
        'excludeMessageTypeList' => 'excludeMessageTypeList',
        'fieldConditions' => 'fieldConditions',
        'filterId' => 'filterId',
        'hasAudio' => 'hasAudio',
        'hasImage' => 'hasImage',
        'hasMultiModeContent' => 'hasMultiModeContent',
        'hasVideo' => 'hasVideo',
        'hostNameList' => 'hostNameList',
        'influenceLevel' => 'influenceLevel',
        'keywordTagIds' => 'keywordTagIds',
        'likesLevel' => 'likesLevel',
        'materialTagList' => 'materialTagList',
        'mediaLibraryIdList' => 'mediaLibraryIdList',
        'mediaNameList' => 'mediaNameList',
        'mediaTypeList' => 'mediaTypeList',
        'messageTypeList' => 'messageTypeList',
        'pageNow' => 'pageNow',
        'pageSize' => 'pageSize',
        'parentDocId' => 'parentDocId',
        'posKeywordList' => 'posKeywordList',
        'posKeywordListInTitle' => 'posKeywordListInTitle',
        'projectId' => 'projectId',
        'propagationLevel' => 'propagationLevel',
        'publishTimeEnd' => 'publishTimeEnd',
        'publishTimeStart' => 'publishTimeStart',
        'readsLevel' => 'readsLevel',
        'relevanceLevel' => 'relevanceLevel',
        'repostLevel' => 'repostLevel',
        'sortBy' => 'sortBy',
        'sortByDirection' => 'sortByDirection',
        'topicList' => 'topicList',
        'updateTimeEnd' => 'updateTimeEnd',
        'updateTimeStart' => 'updateTimeStart',
    ];

    public function validate()
    {
        if (\is_array($this->assKeywordList)) {
            Model::validateArray($this->assKeywordList);
        }
        if (\is_array($this->atAuthorNameList)) {
            Model::validateArray($this->atAuthorNameList);
        }
        if (\is_array($this->authorNameList)) {
            Model::validateArray($this->authorNameList);
        }
        if (\is_array($this->docIdList)) {
            Model::validateArray($this->docIdList);
        }
        if (\is_array($this->excludeAtAuthorNameList)) {
            Model::validateArray($this->excludeAtAuthorNameList);
        }
        if (\is_array($this->excludeAuthorNameList)) {
            Model::validateArray($this->excludeAuthorNameList);
        }
        if (\is_array($this->excludeHostNameList)) {
            Model::validateArray($this->excludeHostNameList);
        }
        if (\is_array($this->excludeKeywordList)) {
            Model::validateArray($this->excludeKeywordList);
        }
        if (\is_array($this->excludeKeywordListInTitle)) {
            Model::validateArray($this->excludeKeywordListInTitle);
        }
        if (\is_array($this->excludeKeywordTagIds)) {
            Model::validateArray($this->excludeKeywordTagIds);
        }
        if (\is_array($this->excludeMaterialTagList)) {
            Model::validateArray($this->excludeMaterialTagList);
        }
        if (\is_array($this->excludeMediaLibraryIdList)) {
            Model::validateArray($this->excludeMediaLibraryIdList);
        }
        if (\is_array($this->excludeMediaNameList)) {
            Model::validateArray($this->excludeMediaNameList);
        }
        if (\is_array($this->excludeMediaTypeList)) {
            Model::validateArray($this->excludeMediaTypeList);
        }
        if (\is_array($this->excludeMessageTypeList)) {
            Model::validateArray($this->excludeMessageTypeList);
        }
        if (\is_array($this->fieldConditions)) {
            Model::validateArray($this->fieldConditions);
        }
        if (\is_array($this->hostNameList)) {
            Model::validateArray($this->hostNameList);
        }
        if (\is_array($this->keywordTagIds)) {
            Model::validateArray($this->keywordTagIds);
        }
        if (\is_array($this->materialTagList)) {
            Model::validateArray($this->materialTagList);
        }
        if (\is_array($this->mediaLibraryIdList)) {
            Model::validateArray($this->mediaLibraryIdList);
        }
        if (\is_array($this->mediaNameList)) {
            Model::validateArray($this->mediaNameList);
        }
        if (\is_array($this->mediaTypeList)) {
            Model::validateArray($this->mediaTypeList);
        }
        if (\is_array($this->messageTypeList)) {
            Model::validateArray($this->messageTypeList);
        }
        if (\is_array($this->posKeywordList)) {
            Model::validateArray($this->posKeywordList);
        }
        if (\is_array($this->posKeywordListInTitle)) {
            Model::validateArray($this->posKeywordListInTitle);
        }
        if (\is_array($this->topicList)) {
            Model::validateArray($this->topicList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assKeywordList) {
            if (\is_array($this->assKeywordList)) {
                $res['assKeywordList'] = [];
                $n1 = 0;
                foreach ($this->assKeywordList as $item1) {
                    $res['assKeywordList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->atAuthorNameList) {
            if (\is_array($this->atAuthorNameList)) {
                $res['atAuthorNameList'] = [];
                $n1 = 0;
                foreach ($this->atAuthorNameList as $item1) {
                    $res['atAuthorNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorNameList) {
            if (\is_array($this->authorNameList)) {
                $res['authorNameList'] = [];
                $n1 = 0;
                foreach ($this->authorNameList as $item1) {
                    $res['authorNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->docIdList)) {
                $res['docIdList'] = [];
                $n1 = 0;
                foreach ($this->docIdList as $item1) {
                    $res['docIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->excludeAtAuthorNameList)) {
                $res['excludeAtAuthorNameList'] = [];
                $n1 = 0;
                foreach ($this->excludeAtAuthorNameList as $item1) {
                    $res['excludeAtAuthorNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeAuthorNameList) {
            if (\is_array($this->excludeAuthorNameList)) {
                $res['excludeAuthorNameList'] = [];
                $n1 = 0;
                foreach ($this->excludeAuthorNameList as $item1) {
                    $res['excludeAuthorNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeHostNameList) {
            if (\is_array($this->excludeHostNameList)) {
                $res['excludeHostNameList'] = [];
                $n1 = 0;
                foreach ($this->excludeHostNameList as $item1) {
                    $res['excludeHostNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeKeywordList) {
            if (\is_array($this->excludeKeywordList)) {
                $res['excludeKeywordList'] = [];
                $n1 = 0;
                foreach ($this->excludeKeywordList as $item1) {
                    $res['excludeKeywordList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeKeywordListInTitle) {
            if (\is_array($this->excludeKeywordListInTitle)) {
                $res['excludeKeywordListInTitle'] = [];
                $n1 = 0;
                foreach ($this->excludeKeywordListInTitle as $item1) {
                    $res['excludeKeywordListInTitle'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeKeywordTagIds) {
            if (\is_array($this->excludeKeywordTagIds)) {
                $res['excludeKeywordTagIds'] = [];
                $n1 = 0;
                foreach ($this->excludeKeywordTagIds as $item1) {
                    $res['excludeKeywordTagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeMaterialTagList) {
            if (\is_array($this->excludeMaterialTagList)) {
                $res['excludeMaterialTagList'] = [];
                $n1 = 0;
                foreach ($this->excludeMaterialTagList as $item1) {
                    $res['excludeMaterialTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeMediaLibraryIdList) {
            if (\is_array($this->excludeMediaLibraryIdList)) {
                $res['excludeMediaLibraryIdList'] = [];
                $n1 = 0;
                foreach ($this->excludeMediaLibraryIdList as $item1) {
                    $res['excludeMediaLibraryIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeMediaNameList) {
            if (\is_array($this->excludeMediaNameList)) {
                $res['excludeMediaNameList'] = [];
                $n1 = 0;
                foreach ($this->excludeMediaNameList as $item1) {
                    $res['excludeMediaNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeMediaTypeList) {
            if (\is_array($this->excludeMediaTypeList)) {
                $res['excludeMediaTypeList'] = [];
                $n1 = 0;
                foreach ($this->excludeMediaTypeList as $item1) {
                    $res['excludeMediaTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeMessageTypeList) {
            if (\is_array($this->excludeMessageTypeList)) {
                $res['excludeMessageTypeList'] = [];
                $n1 = 0;
                foreach ($this->excludeMessageTypeList as $item1) {
                    $res['excludeMessageTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fieldConditions) {
            if (\is_array($this->fieldConditions)) {
                $res['fieldConditions'] = [];
                $n1 = 0;
                foreach ($this->fieldConditions as $item1) {
                    $res['fieldConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->hostNameList)) {
                $res['hostNameList'] = [];
                $n1 = 0;
                foreach ($this->hostNameList as $item1) {
                    $res['hostNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->influenceLevel) {
            $res['influenceLevel'] = $this->influenceLevel;
        }

        if (null !== $this->keywordTagIds) {
            if (\is_array($this->keywordTagIds)) {
                $res['keywordTagIds'] = [];
                $n1 = 0;
                foreach ($this->keywordTagIds as $item1) {
                    $res['keywordTagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->likesLevel) {
            $res['likesLevel'] = $this->likesLevel;
        }

        if (null !== $this->materialTagList) {
            if (\is_array($this->materialTagList)) {
                $res['materialTagList'] = [];
                $n1 = 0;
                foreach ($this->materialTagList as $item1) {
                    $res['materialTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaLibraryIdList) {
            if (\is_array($this->mediaLibraryIdList)) {
                $res['mediaLibraryIdList'] = [];
                $n1 = 0;
                foreach ($this->mediaLibraryIdList as $item1) {
                    $res['mediaLibraryIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaNameList) {
            if (\is_array($this->mediaNameList)) {
                $res['mediaNameList'] = [];
                $n1 = 0;
                foreach ($this->mediaNameList as $item1) {
                    $res['mediaNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaTypeList) {
            if (\is_array($this->mediaTypeList)) {
                $res['mediaTypeList'] = [];
                $n1 = 0;
                foreach ($this->mediaTypeList as $item1) {
                    $res['mediaTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageTypeList) {
            if (\is_array($this->messageTypeList)) {
                $res['messageTypeList'] = [];
                $n1 = 0;
                foreach ($this->messageTypeList as $item1) {
                    $res['messageTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->posKeywordList)) {
                $res['posKeywordList'] = [];
                $n1 = 0;
                foreach ($this->posKeywordList as $item1) {
                    $res['posKeywordList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->posKeywordListInTitle) {
            if (\is_array($this->posKeywordListInTitle)) {
                $res['posKeywordListInTitle'] = [];
                $n1 = 0;
                foreach ($this->posKeywordListInTitle as $item1) {
                    $res['posKeywordListInTitle'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->topicList)) {
                $res['topicList'] = [];
                $n1 = 0;
                foreach ($this->topicList as $item1) {
                    $res['topicList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTimeEnd) {
            $res['updateTimeEnd'] = $this->updateTimeEnd;
        }

        if (null !== $this->updateTimeStart) {
            $res['updateTimeStart'] = $this->updateTimeStart;
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
        if (isset($map['assKeywordList'])) {
            if (!empty($map['assKeywordList'])) {
                $model->assKeywordList = [];
                $n1 = 0;
                foreach ($map['assKeywordList'] as $item1) {
                    $model->assKeywordList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['atAuthorNameList'])) {
            if (!empty($map['atAuthorNameList'])) {
                $model->atAuthorNameList = [];
                $n1 = 0;
                foreach ($map['atAuthorNameList'] as $item1) {
                    $model->atAuthorNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['authorNameList'])) {
            if (!empty($map['authorNameList'])) {
                $model->authorNameList = [];
                $n1 = 0;
                foreach ($map['authorNameList'] as $item1) {
                    $model->authorNameList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->docIdList = [];
                $n1 = 0;
                foreach ($map['docIdList'] as $item1) {
                    $model->docIdList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->excludeAtAuthorNameList = [];
                $n1 = 0;
                foreach ($map['excludeAtAuthorNameList'] as $item1) {
                    $model->excludeAtAuthorNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeAuthorNameList'])) {
            if (!empty($map['excludeAuthorNameList'])) {
                $model->excludeAuthorNameList = [];
                $n1 = 0;
                foreach ($map['excludeAuthorNameList'] as $item1) {
                    $model->excludeAuthorNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeHostNameList'])) {
            if (!empty($map['excludeHostNameList'])) {
                $model->excludeHostNameList = [];
                $n1 = 0;
                foreach ($map['excludeHostNameList'] as $item1) {
                    $model->excludeHostNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeKeywordList'])) {
            if (!empty($map['excludeKeywordList'])) {
                $model->excludeKeywordList = [];
                $n1 = 0;
                foreach ($map['excludeKeywordList'] as $item1) {
                    $model->excludeKeywordList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeKeywordListInTitle'])) {
            if (!empty($map['excludeKeywordListInTitle'])) {
                $model->excludeKeywordListInTitle = [];
                $n1 = 0;
                foreach ($map['excludeKeywordListInTitle'] as $item1) {
                    $model->excludeKeywordListInTitle[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeKeywordTagIds'])) {
            if (!empty($map['excludeKeywordTagIds'])) {
                $model->excludeKeywordTagIds = [];
                $n1 = 0;
                foreach ($map['excludeKeywordTagIds'] as $item1) {
                    $model->excludeKeywordTagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeMaterialTagList'])) {
            if (!empty($map['excludeMaterialTagList'])) {
                $model->excludeMaterialTagList = [];
                $n1 = 0;
                foreach ($map['excludeMaterialTagList'] as $item1) {
                    $model->excludeMaterialTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeMediaLibraryIdList'])) {
            if (!empty($map['excludeMediaLibraryIdList'])) {
                $model->excludeMediaLibraryIdList = [];
                $n1 = 0;
                foreach ($map['excludeMediaLibraryIdList'] as $item1) {
                    $model->excludeMediaLibraryIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeMediaNameList'])) {
            if (!empty($map['excludeMediaNameList'])) {
                $model->excludeMediaNameList = [];
                $n1 = 0;
                foreach ($map['excludeMediaNameList'] as $item1) {
                    $model->excludeMediaNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeMediaTypeList'])) {
            if (!empty($map['excludeMediaTypeList'])) {
                $model->excludeMediaTypeList = [];
                $n1 = 0;
                foreach ($map['excludeMediaTypeList'] as $item1) {
                    $model->excludeMediaTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeMessageTypeList'])) {
            if (!empty($map['excludeMessageTypeList'])) {
                $model->excludeMessageTypeList = [];
                $n1 = 0;
                foreach ($map['excludeMessageTypeList'] as $item1) {
                    $model->excludeMessageTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fieldConditions'])) {
            if (!empty($map['fieldConditions'])) {
                $model->fieldConditions = [];
                $n1 = 0;
                foreach ($map['fieldConditions'] as $item1) {
                    $model->fieldConditions[$n1] = FieldCondition::fromMap($item1);
                    ++$n1;
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
                $model->hostNameList = [];
                $n1 = 0;
                foreach ($map['hostNameList'] as $item1) {
                    $model->hostNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['influenceLevel'])) {
            $model->influenceLevel = $map['influenceLevel'];
        }

        if (isset($map['keywordTagIds'])) {
            if (!empty($map['keywordTagIds'])) {
                $model->keywordTagIds = [];
                $n1 = 0;
                foreach ($map['keywordTagIds'] as $item1) {
                    $model->keywordTagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['likesLevel'])) {
            $model->likesLevel = $map['likesLevel'];
        }

        if (isset($map['materialTagList'])) {
            if (!empty($map['materialTagList'])) {
                $model->materialTagList = [];
                $n1 = 0;
                foreach ($map['materialTagList'] as $item1) {
                    $model->materialTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mediaLibraryIdList'])) {
            if (!empty($map['mediaLibraryIdList'])) {
                $model->mediaLibraryIdList = [];
                $n1 = 0;
                foreach ($map['mediaLibraryIdList'] as $item1) {
                    $model->mediaLibraryIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mediaNameList'])) {
            if (!empty($map['mediaNameList'])) {
                $model->mediaNameList = [];
                $n1 = 0;
                foreach ($map['mediaNameList'] as $item1) {
                    $model->mediaNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mediaTypeList'])) {
            if (!empty($map['mediaTypeList'])) {
                $model->mediaTypeList = [];
                $n1 = 0;
                foreach ($map['mediaTypeList'] as $item1) {
                    $model->mediaTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['messageTypeList'])) {
            if (!empty($map['messageTypeList'])) {
                $model->messageTypeList = [];
                $n1 = 0;
                foreach ($map['messageTypeList'] as $item1) {
                    $model->messageTypeList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->posKeywordList = [];
                $n1 = 0;
                foreach ($map['posKeywordList'] as $item1) {
                    $model->posKeywordList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['posKeywordListInTitle'])) {
            if (!empty($map['posKeywordListInTitle'])) {
                $model->posKeywordListInTitle = [];
                $n1 = 0;
                foreach ($map['posKeywordListInTitle'] as $item1) {
                    $model->posKeywordListInTitle[$n1] = $item1;
                    ++$n1;
                }
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
                $model->topicList = [];
                $n1 = 0;
                foreach ($map['topicList'] as $item1) {
                    $model->topicList[$n1] = $item1;
                    ++$n1;
                }
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
