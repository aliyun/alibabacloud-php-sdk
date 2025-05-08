<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class UnifiedSearchOutput extends Model
{
    /**
     * @var UnifiedCostCredits
     */
    public $costCredits;

    /**
     * @var UnifiedPageItem[]
     */
    public $pageItems;

    /**
     * @var UnifiedQueryContext
     */
    public $queryContext;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UnifiedSceneItem[]
     */
    public $sceneItems;

    /**
     * @var UnifiedSearchInformation
     */
    public $searchInformation;
    protected $_name = [
        'costCredits' => 'costCredits',
        'pageItems' => 'pageItems',
        'queryContext' => 'queryContext',
        'requestId' => 'requestId',
        'sceneItems' => 'sceneItems',
        'searchInformation' => 'searchInformation',
    ];

    public function validate()
    {
        if (null !== $this->costCredits) {
            $this->costCredits->validate();
        }
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCredits) {
            $res['costCredits'] = null !== $this->costCredits ? $this->costCredits->toArray($noStream) : $this->costCredits;
        }

        if (null !== $this->pageItems) {
            if (\is_array($this->pageItems)) {
                $res['pageItems'] = [];
                $n1 = 0;
                foreach ($this->pageItems as $item1) {
                    $res['pageItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $res['sceneItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searchInformation) {
            $res['searchInformation'] = null !== $this->searchInformation ? $this->searchInformation->toArray($noStream) : $this->searchInformation;
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
        if (isset($map['costCredits'])) {
            $model->costCredits = UnifiedCostCredits::fromMap($map['costCredits']);
        }

        if (isset($map['pageItems'])) {
            if (!empty($map['pageItems'])) {
                $model->pageItems = [];
                $n1 = 0;
                foreach ($map['pageItems'] as $item1) {
                    $model->pageItems[$n1++] = UnifiedPageItem::fromMap($item1);
                }
            }
        }

        if (isset($map['queryContext'])) {
            $model->queryContext = UnifiedQueryContext::fromMap($map['queryContext']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sceneItems'])) {
            if (!empty($map['sceneItems'])) {
                $model->sceneItems = [];
                $n1 = 0;
                foreach ($map['sceneItems'] as $item1) {
                    $model->sceneItems[$n1++] = UnifiedSceneItem::fromMap($item1);
                }
            }
        }

        if (isset($map['searchInformation'])) {
            $model->searchInformation = UnifiedSearchInformation::fromMap($map['searchInformation']);
        }

        return $model;
    }
}
