<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody\items;

use AlibabaCloud\Tea\Model;

class preCheckProgressDetail extends Model
{
    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $bootTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $orderNum;

    /**
     * @var string
     */
    public $names;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'state'      => 'State',
        'bootTime'   => 'BootTime',
        'jobId'      => 'JobId',
        'item'       => 'Item',
        'errMsg'     => 'ErrMsg',
        'orderNum'   => 'OrderNum',
        'names'      => 'Names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
