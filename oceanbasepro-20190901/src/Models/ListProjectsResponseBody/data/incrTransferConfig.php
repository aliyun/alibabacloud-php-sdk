<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data;

use AlibabaCloud\Tea\Model;

class incrTransferConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableIncrSyncStatistics;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSequencingWithinTxn;

    /**
     * @example 64
     *
     * @var int
     */
    public $incrSyncConcurrency;

    /**
     * @var string[]
     */
    public $recordTypeWhiteList;

    /**
     * @example 1681004708
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @example 24
     *
     * @var int
     */
    public $storeLogKeptHour;
    protected $_name = [
        'enableIncrSyncStatistics'  => 'EnableIncrSyncStatistics',
        'enableSequencingWithinTxn' => 'EnableSequencingWithinTxn',
        'incrSyncConcurrency'       => 'IncrSyncConcurrency',
        'recordTypeWhiteList'       => 'RecordTypeWhiteList',
        'startTimestamp'            => 'StartTimestamp',
        'storeLogKeptHour'          => 'StoreLogKeptHour',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableIncrSyncStatistics) {
            $res['EnableIncrSyncStatistics'] = $this->enableIncrSyncStatistics;
        }
        if (null !== $this->enableSequencingWithinTxn) {
            $res['EnableSequencingWithinTxn'] = $this->enableSequencingWithinTxn;
        }
        if (null !== $this->incrSyncConcurrency) {
            $res['IncrSyncConcurrency'] = $this->incrSyncConcurrency;
        }
        if (null !== $this->recordTypeWhiteList) {
            $res['RecordTypeWhiteList'] = $this->recordTypeWhiteList;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->storeLogKeptHour) {
            $res['StoreLogKeptHour'] = $this->storeLogKeptHour;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incrTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableIncrSyncStatistics'])) {
            $model->enableIncrSyncStatistics = $map['EnableIncrSyncStatistics'];
        }
        if (isset($map['EnableSequencingWithinTxn'])) {
            $model->enableSequencingWithinTxn = $map['EnableSequencingWithinTxn'];
        }
        if (isset($map['IncrSyncConcurrency'])) {
            $model->incrSyncConcurrency = $map['IncrSyncConcurrency'];
        }
        if (isset($map['RecordTypeWhiteList'])) {
            if (!empty($map['RecordTypeWhiteList'])) {
                $model->recordTypeWhiteList = $map['RecordTypeWhiteList'];
            }
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['StoreLogKeptHour'])) {
            $model->storeLogKeptHour = $map['StoreLogKeptHour'];
        }

        return $model;
    }
}
