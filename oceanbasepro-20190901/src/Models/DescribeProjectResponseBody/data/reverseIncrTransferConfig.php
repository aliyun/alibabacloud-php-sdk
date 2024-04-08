<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class reverseIncrTransferConfig extends Model
{
    /**
     * @var bool
     */
    public $enableIncrSyncStatistics;

    /**
     * @var bool
     */
    public $enableSequencingWithinTxn;

    /**
     * @var int
     */
    public $incrSyncConcurrency;

    /**
     * @var string[]
     */
    public $recordTypeWhiteList;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var int
     */
    public $storeLogKeptHour;

    /**
     * @var string[]
     */
    public $supportDDLTypes;

    /**
     * @var int
     */
    public $throttleIOPS;

    /**
     * @var int
     */
    public $throttleRps;
    protected $_name = [
        'enableIncrSyncStatistics'  => 'EnableIncrSyncStatistics',
        'enableSequencingWithinTxn' => 'EnableSequencingWithinTxn',
        'incrSyncConcurrency'       => 'IncrSyncConcurrency',
        'recordTypeWhiteList'       => 'RecordTypeWhiteList',
        'startTimestamp'            => 'StartTimestamp',
        'storeLogKeptHour'          => 'StoreLogKeptHour',
        'supportDDLTypes'           => 'SupportDDLTypes',
        'throttleIOPS'              => 'ThrottleIOPS',
        'throttleRps'               => 'ThrottleRps',
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
        if (null !== $this->supportDDLTypes) {
            $res['SupportDDLTypes'] = $this->supportDDLTypes;
        }
        if (null !== $this->throttleIOPS) {
            $res['ThrottleIOPS'] = $this->throttleIOPS;
        }
        if (null !== $this->throttleRps) {
            $res['ThrottleRps'] = $this->throttleRps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reverseIncrTransferConfig
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
        if (isset($map['SupportDDLTypes'])) {
            if (!empty($map['SupportDDLTypes'])) {
                $model->supportDDLTypes = $map['SupportDDLTypes'];
            }
        }
        if (isset($map['ThrottleIOPS'])) {
            $model->throttleIOPS = $map['ThrottleIOPS'];
        }
        if (isset($map['ThrottleRps'])) {
            $model->throttleRps = $map['ThrottleRps'];
        }

        return $model;
    }
}
