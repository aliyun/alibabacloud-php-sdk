<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class ruleHitRecords extends Model
{
    /**
     * @var int
     */
    public $cost;

    /**
     * @var bool
     */
    public $hitSuccessful;

    /**
     * @var bool
     */
    public $isShowDetail;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleSnapshotId;

    /**
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'cost'           => 'cost',
        'hitSuccessful'  => 'hitSuccessful',
        'isShowDetail'   => 'isShowDetail',
        'order'          => 'order',
        'ruleId'         => 'ruleId',
        'ruleName'       => 'ruleName',
        'ruleSnapshotId' => 'ruleSnapshotId',
        'ruleStatus'     => 'ruleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->hitSuccessful) {
            $res['hitSuccessful'] = $this->hitSuccessful;
        }
        if (null !== $this->isShowDetail) {
            $res['isShowDetail'] = $this->isShowDetail;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSnapshotId) {
            $res['ruleSnapshotId'] = $this->ruleSnapshotId;
        }
        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['hitSuccessful'])) {
            $model->hitSuccessful = $map['hitSuccessful'];
        }
        if (isset($map['isShowDetail'])) {
            $model->isShowDetail = $map['isShowDetail'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['ruleSnapshotId'])) {
            $model->ruleSnapshotId = $map['ruleSnapshotId'];
        }
        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        return $model;
    }
}
