<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody\items;

use AlibabaCloud\Tea\Model;

class preCheckProgressDetail extends Model
{
    /**
     * @var int
     */
    public $bootTime;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $orderNum;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'bootTime'   => 'BootTime',
        'errMsg'     => 'ErrMsg',
        'finishTime' => 'FinishTime',
        'item'       => 'Item',
        'jobId'      => 'JobId',
        'names'      => 'Names',
        'orderNum'   => 'OrderNum',
        'state'      => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckProgressDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
