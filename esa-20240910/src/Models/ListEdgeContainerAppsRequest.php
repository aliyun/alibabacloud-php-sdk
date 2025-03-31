<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListEdgeContainerAppsRequest extends Model
{
    /**
     * @var string
     */
    public $orderKey;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $searchType;
    protected $_name = [
        'orderKey' => 'OrderKey',
        'orderType' => 'OrderType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'searchType' => 'SearchType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
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
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        return $model;
    }
}
