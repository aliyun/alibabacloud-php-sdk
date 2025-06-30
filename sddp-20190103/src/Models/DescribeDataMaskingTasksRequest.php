<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeDataMaskingTasksRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'dstType' => 'DstType',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
