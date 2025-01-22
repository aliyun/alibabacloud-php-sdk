<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListAlertsRequest extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $gmtEnd;
    /**
     * @var string
     */
    public $gmtStart;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $resourceArn;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sortByModifiedTime;
    protected $_name = [
        'category'           => 'Category',
        'gmtEnd'             => 'GmtEnd',
        'gmtStart'           => 'GmtStart',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'resourceArn'        => 'ResourceArn',
        'sortBy'             => 'SortBy',
        'sortByModifiedTime' => 'SortByModifiedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sortByModifiedTime) {
            $res['SortByModifiedTime'] = $this->sortByModifiedTime;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }

        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SortByModifiedTime'])) {
            $model->sortByModifiedTime = $map['SortByModifiedTime'];
        }

        return $model;
    }
}
