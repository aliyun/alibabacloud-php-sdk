<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class MultimodalSearchOutput extends Model
{
    /**
     * @var UnifiedImageItem[]
     */
    public $imageItems;

    /**
     * @var MultimodalQueryContext
     */
    public $queryContext;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SearchInformation
     */
    public $searchInformation;
    protected $_name = [
        'imageItems' => 'imageItems',
        'queryContext' => 'queryContext',
        'requestId' => 'requestId',
        'searchInformation' => 'searchInformation',
    ];

    public function validate()
    {
        if (\is_array($this->imageItems)) {
            Model::validateArray($this->imageItems);
        }
        if (null !== $this->queryContext) {
            $this->queryContext->validate();
        }
        if (null !== $this->searchInformation) {
            $this->searchInformation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageItems) {
            if (\is_array($this->imageItems)) {
                $res['imageItems'] = [];
                $n1 = 0;
                foreach ($this->imageItems as $item1) {
                    $res['imageItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['imageItems'])) {
            if (!empty($map['imageItems'])) {
                $model->imageItems = [];
                $n1 = 0;
                foreach ($map['imageItems'] as $item1) {
                    $model->imageItems[$n1] = UnifiedImageItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['queryContext'])) {
            $model->queryContext = MultimodalQueryContext::fromMap($map['queryContext']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['searchInformation'])) {
            $model->searchInformation = SearchInformation::fromMap($map['searchInformation']);
        }

        return $model;
    }
}
