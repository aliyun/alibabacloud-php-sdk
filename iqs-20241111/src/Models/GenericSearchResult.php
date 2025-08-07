<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->pageItems)) {
            Model::validateArray($this->pageItems);
        }
        if (null !== $this->queryContext) {
            $this->queryContext->validate();
        }
        if (\is_array($this->sceneItems)) {
            Model::validateArray($this->sceneItems);
        }
        if (null !== $this->searchInformation) {
            $this->searchInformation->validate();
        }
        if (\is_array($this->weiboItems)) {
            Model::validateArray($this->weiboItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageItems) {
            if (\is_array($this->pageItems)) {
                $res['pageItems'] = [];
                $n1 = 0;
                foreach ($this->pageItems as $item1) {
                    $res['pageItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryContext) {
            $res['queryContext'] = null !== $this->queryContext ? $this->queryContext->toArray($noStream) : $this->queryContext;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sceneItems) {
            if (\is_array($this->sceneItems)) {
                $res['sceneItems'] = [];
                $n1 = 0;
                foreach ($this->sceneItems as $item1) {
                    $res['sceneItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchInformation) {
            $res['searchInformation'] = null !== $this->searchInformation ? $this->searchInformation->toArray($noStream) : $this->searchInformation;
        }

        if (null !== $this->weiboItems) {
            if (\is_array($this->weiboItems)) {
                $res['weiboItems'] = [];
                $n1 = 0;
                foreach ($this->weiboItems as $item1) {
                    $res['weiboItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pageItems'])) {
            if (!empty($map['pageItems'])) {
                $model->pageItems = [];
                $n1 = 0;
                foreach ($map['pageItems'] as $item1) {
                    $model->pageItems[$n1] = ScorePageItem::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['sceneItems'] as $item1) {
                    $model->sceneItems[$n1] = SceneItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['searchInformation'])) {
            $model->searchInformation = SearchInformation::fromMap($map['searchInformation']);
        }

        if (isset($map['weiboItems'])) {
            if (!empty($map['weiboItems'])) {
                $model->weiboItems = [];
                $n1 = 0;
                foreach ($map['weiboItems'] as $item1) {
                    $model->weiboItems[$n1] = WeiboItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
