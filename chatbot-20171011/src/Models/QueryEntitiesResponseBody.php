<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesResponseBody\entities;
use AlibabaCloud\Tea\Model;

class QueryEntitiesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var entities[]
     */
    public $entities;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'entities'   => 'Entities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->entities) {
            $res['Entities'] = [];
            if (null !== $this->entities && \is_array($this->entities)) {
                $n = 0;
                foreach ($this->entities as $item) {
                    $res['Entities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n               = 0;
                foreach ($map['Entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
