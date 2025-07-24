<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GlobalSearchResult extends Model
{
    /**
     * @var GlobalPageItem[]
     */
    public $pageItems;

    /**
     * @var GlobalQueryContext
     */
    public $queryContext;

    /**
     * @example 123456
     *
     * @var string
     */
    public $requestId;

    /**
     * @var GlobalSceneItem[]
     */
    public $sceneItems;

    /**
     * @var GlobalSearchInformation
     */
    public $searchInformation;
    protected $_name = [
        'pageItems' => 'pageItems',
        'queryContext' => 'queryContext',
        'requestId' => 'requestId',
        'sceneItems' => 'sceneItems',
        'searchInformation' => 'searchInformation',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GlobalSearchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageItems'])) {
            if (!empty($map['pageItems'])) {
                $model->pageItems = [];
                $n = 0;
                foreach ($map['pageItems'] as $item) {
                    $model->pageItems[$n++] = null !== $item ? GlobalPageItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['queryContext'])) {
            $model->queryContext = GlobalQueryContext::fromMap($map['queryContext']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sceneItems'])) {
            if (!empty($map['sceneItems'])) {
                $model->sceneItems = [];
                $n = 0;
                foreach ($map['sceneItems'] as $item) {
                    $model->sceneItems[$n++] = null !== $item ? GlobalSceneItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['searchInformation'])) {
            $model->searchInformation = GlobalSearchInformation::fromMap($map['searchInformation']);
        }

        return $model;
    }
}
