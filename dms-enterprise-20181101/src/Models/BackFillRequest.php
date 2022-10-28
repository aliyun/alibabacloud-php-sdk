<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BackFillRequest extends Model
{
    /**
     * @var bool
     */
    public $asc;

    /**
     * @var string
     */
    public $backFillDate;

    /**
     * @var string
     */
    public $backFillDateBegin;

    /**
     * @var string
     */
    public $backFillDateEnd;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $historyDagId;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var bool
     */
    public $isTriggerSubTree;

    /**
     * @var int[]
     */
    public $startNodeIds;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'asc'               => 'Asc',
        'backFillDate'      => 'BackFillDate',
        'backFillDateBegin' => 'BackFillDateBegin',
        'backFillDateEnd'   => 'BackFillDateEnd',
        'dagId'             => 'DagId',
        'historyDagId'      => 'HistoryDagId',
        'interval'          => 'Interval',
        'isTriggerSubTree'  => 'IsTriggerSubTree',
        'startNodeIds'      => 'StartNodeIds',
        'tid'               => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->backFillDate) {
            $res['BackFillDate'] = $this->backFillDate;
        }
        if (null !== $this->backFillDateBegin) {
            $res['BackFillDateBegin'] = $this->backFillDateBegin;
        }
        if (null !== $this->backFillDateEnd) {
            $res['BackFillDateEnd'] = $this->backFillDateEnd;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->isTriggerSubTree) {
            $res['IsTriggerSubTree'] = $this->isTriggerSubTree;
        }
        if (null !== $this->startNodeIds) {
            $res['StartNodeIds'] = $this->startNodeIds;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BackFillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['BackFillDate'])) {
            $model->backFillDate = $map['BackFillDate'];
        }
        if (isset($map['BackFillDateBegin'])) {
            $model->backFillDateBegin = $map['BackFillDateBegin'];
        }
        if (isset($map['BackFillDateEnd'])) {
            $model->backFillDateEnd = $map['BackFillDateEnd'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IsTriggerSubTree'])) {
            $model->isTriggerSubTree = $map['IsTriggerSubTree'];
        }
        if (isset($map['StartNodeIds'])) {
            if (!empty($map['StartNodeIds'])) {
                $model->startNodeIds = $map['StartNodeIds'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
