<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemReportsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example 3.24
     *
     * @var string
     */
    public $accClickPercent;

    /**
     * @example 1000
     *
     * @var string
     */
    public $accItemClick;

    /**
     * @example 4.56
     *
     * @var string
     */
    public $accItemCtr;

    /**
     * @example 500
     *
     * @var string
     */
    public $accItemPv;

    /**
     * @example 20.12
     *
     * @var string
     */
    public $accPvPercent;

    /**
     * @example 600
     *
     * @var string
     */
    public $accTaskClick;

    /**
     * @example 3.22
     *
     * @var string
     */
    public $accTaskCtr;

    /**
     * @example 200
     *
     * @var string
     */
    public $accTaskPv;

    /**
     * @example 10
     *
     * @var string
     */
    public $accTaskRank;

    /**
     * @example 1.23
     *
     * @var string
     */
    public $clickPercent;

    /**
     * @example 100
     *
     * @var string
     */
    public $itemClick;

    /**
     * @example 2.34
     *
     * @var string
     */
    public $itemCtr;

    /**
     * @example 123
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 100
     *
     * @var string
     */
    public $itemPv;

    /**
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @example 10.12
     *
     * @var string
     */
    public $pvPercent;

    /**
     * @example 100
     *
     * @var string
     */
    public $taskClick;

    /**
     * @example 1.23
     *
     * @var string
     */
    public $taskCtr;

    /**
     * @example 1666669577221
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 50
     *
     * @var string
     */
    public $taskPv;

    /**
     * @example 12
     *
     * @var string
     */
    public $taskRank;
    protected $_name = [
        'accClickPercent' => 'accClickPercent',
        'accItemClick'    => 'accItemClick',
        'accItemCtr'      => 'accItemCtr',
        'accItemPv'       => 'accItemPv',
        'accPvPercent'    => 'accPvPercent',
        'accTaskClick'    => 'accTaskClick',
        'accTaskCtr'      => 'accTaskCtr',
        'accTaskPv'       => 'accTaskPv',
        'accTaskRank'     => 'accTaskRank',
        'clickPercent'    => 'clickPercent',
        'itemClick'       => 'itemClick',
        'itemCtr'         => 'itemCtr',
        'itemId'          => 'itemId',
        'itemPv'          => 'itemPv',
        'itemType'        => 'itemType',
        'pvPercent'       => 'pvPercent',
        'taskClick'       => 'taskClick',
        'taskCtr'         => 'taskCtr',
        'taskId'          => 'taskId',
        'taskPv'          => 'taskPv',
        'taskRank'        => 'taskRank',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accClickPercent) {
            $res['accClickPercent'] = $this->accClickPercent;
        }
        if (null !== $this->accItemClick) {
            $res['accItemClick'] = $this->accItemClick;
        }
        if (null !== $this->accItemCtr) {
            $res['accItemCtr'] = $this->accItemCtr;
        }
        if (null !== $this->accItemPv) {
            $res['accItemPv'] = $this->accItemPv;
        }
        if (null !== $this->accPvPercent) {
            $res['accPvPercent'] = $this->accPvPercent;
        }
        if (null !== $this->accTaskClick) {
            $res['accTaskClick'] = $this->accTaskClick;
        }
        if (null !== $this->accTaskCtr) {
            $res['accTaskCtr'] = $this->accTaskCtr;
        }
        if (null !== $this->accTaskPv) {
            $res['accTaskPv'] = $this->accTaskPv;
        }
        if (null !== $this->accTaskRank) {
            $res['accTaskRank'] = $this->accTaskRank;
        }
        if (null !== $this->clickPercent) {
            $res['clickPercent'] = $this->clickPercent;
        }
        if (null !== $this->itemClick) {
            $res['itemClick'] = $this->itemClick;
        }
        if (null !== $this->itemCtr) {
            $res['itemCtr'] = $this->itemCtr;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemPv) {
            $res['itemPv'] = $this->itemPv;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->pvPercent) {
            $res['pvPercent'] = $this->pvPercent;
        }
        if (null !== $this->taskClick) {
            $res['taskClick'] = $this->taskClick;
        }
        if (null !== $this->taskCtr) {
            $res['taskCtr'] = $this->taskCtr;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->taskPv) {
            $res['taskPv'] = $this->taskPv;
        }
        if (null !== $this->taskRank) {
            $res['taskRank'] = $this->taskRank;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accClickPercent'])) {
            $model->accClickPercent = $map['accClickPercent'];
        }
        if (isset($map['accItemClick'])) {
            $model->accItemClick = $map['accItemClick'];
        }
        if (isset($map['accItemCtr'])) {
            $model->accItemCtr = $map['accItemCtr'];
        }
        if (isset($map['accItemPv'])) {
            $model->accItemPv = $map['accItemPv'];
        }
        if (isset($map['accPvPercent'])) {
            $model->accPvPercent = $map['accPvPercent'];
        }
        if (isset($map['accTaskClick'])) {
            $model->accTaskClick = $map['accTaskClick'];
        }
        if (isset($map['accTaskCtr'])) {
            $model->accTaskCtr = $map['accTaskCtr'];
        }
        if (isset($map['accTaskPv'])) {
            $model->accTaskPv = $map['accTaskPv'];
        }
        if (isset($map['accTaskRank'])) {
            $model->accTaskRank = $map['accTaskRank'];
        }
        if (isset($map['clickPercent'])) {
            $model->clickPercent = $map['clickPercent'];
        }
        if (isset($map['itemClick'])) {
            $model->itemClick = $map['itemClick'];
        }
        if (isset($map['itemCtr'])) {
            $model->itemCtr = $map['itemCtr'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemPv'])) {
            $model->itemPv = $map['itemPv'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['pvPercent'])) {
            $model->pvPercent = $map['pvPercent'];
        }
        if (isset($map['taskClick'])) {
            $model->taskClick = $map['taskClick'];
        }
        if (isset($map['taskCtr'])) {
            $model->taskCtr = $map['taskCtr'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['taskPv'])) {
            $model->taskPv = $map['taskPv'];
        }
        if (isset($map['taskRank'])) {
            $model->taskRank = $map['taskRank'];
        }

        return $model;
    }
}
