<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GenericSearchResult extends Model
{
    /**
     * @var ScorePageItem[]
     */
    public $pageItems;

    /**
     * @var QueryContext
     */
    public $queryContext;

    /**
     * @example 123456
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SceneItem[]
     */
    public $sceneItems;

    /**
     * @var SearchInformation
     */
    public $searchInformation;

    /**
     * @var WeiboItem[]
     */
    public $weiboItems;
    protected $_name = [
        'pageItems' => 'pageItems',
        'queryContext' => 'queryContext',
        'requestId' => 'requestId',
        'sceneItems' => 'sceneItems',
        'searchInformation' => 'searchInformation',
        'weiboItems' => 'weiboItems',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageItems) {
            $res['pageItems'] = [];
            if (null !== $this->pageItems && \is_array($this->pageItems)) {
                $n = 0;
                foreach ($this->pageItems as $item) {
                    $res['pageItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryContext) {
            $res['queryContext'] = null !== $this->queryContext ? $this->queryContext->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sceneItems) {
            $res['sceneItems'] = [];
            if (null !== $this->sceneItems && \is_array($this->sceneItems)) {
                $n = 0;
                foreach ($this->sceneItems as $item) {
                    $res['sceneItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchInformation) {
            $res['searchInformation'] = null !== $this->searchInformation ? $this->searchInformation->toMap() : null;
        }
        if (null !== $this->weiboItems) {
            $res['weiboItems'] = [];
            if (null !== $this->weiboItems && \is_array($this->weiboItems)) {
                $n = 0;
                foreach ($this->weiboItems as $item) {
                    $res['weiboItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenericSearchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageItems'])) {
            if (!empty($map['pageItems'])) {
                $model->pageItems = [];
                $n = 0;
                foreach ($map['pageItems'] as $item) {
                    $model->pageItems[$n++] = null !== $item ? ScorePageItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['queryContext'])) {
            $model->queryContext = QueryContext::fromMap($map['queryContext']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sceneItems'])) {
            if (!empty($map['sceneItems'])) {
                $model->sceneItems = [];
                $n = 0;
                foreach ($map['sceneItems'] as $item) {
                    $model->sceneItems[$n++] = null !== $item ? SceneItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['searchInformation'])) {
            $model->searchInformation = SearchInformation::fromMap($map['searchInformation']);
        }
        if (isset($map['weiboItems'])) {
            if (!empty($map['weiboItems'])) {
                $model->weiboItems = [];
                $n = 0;
                foreach ($map['weiboItems'] as $item) {
                    $model->weiboItems[$n++] = null !== $item ? WeiboItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
