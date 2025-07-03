<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Dara\Model;

class incrTransferConfig extends Model
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
     * @var string
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
        'enableIncrSyncStatistics' => 'EnableIncrSyncStatistics',
        'enableSequencingWithinTxn' => 'EnableSequencingWithinTxn',
        'incrSyncConcurrency' => 'IncrSyncConcurrency',
        'recordTypeWhiteList' => 'RecordTypeWhiteList',
        'startTimestamp' => 'StartTimestamp',
        'storeLogKeptHour' => 'StoreLogKeptHour',
        'supportDDLTypes' => 'SupportDDLTypes',
        'throttleIOPS' => 'ThrottleIOPS',
        'throttleRps' => 'ThrottleRps',
    ];

    public function validate()
    {
        if (\is_array($this->recordTypeWhiteList)) {
            Model::validateArray($this->recordTypeWhiteList);
        }
        if (\is_array($this->supportDDLTypes)) {
            Model::validateArray($this->supportDDLTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->recordTypeWhiteList)) {
                $res['RecordTypeWhiteList'] = [];
                $n1 = 0;
                foreach ($this->recordTypeWhiteList as $item1) {
                    $res['RecordTypeWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        if (null !== $this->storeLogKeptHour) {
            $res['StoreLogKeptHour'] = $this->storeLogKeptHour;
        }

        if (null !== $this->supportDDLTypes) {
            if (\is_array($this->supportDDLTypes)) {
                $res['SupportDDLTypes'] = [];
                $n1 = 0;
                foreach ($this->supportDDLTypes as $item1) {
                    $res['SupportDDLTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->throttleIOPS) {
            $res['ThrottleIOPS'] = $this->throttleIOPS;
        }

        if (null !== $this->throttleRps) {
            $res['ThrottleRps'] = $this->throttleRps;
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
                $model->recordTypeWhiteList = [];
                $n1 = 0;
                foreach ($map['RecordTypeWhiteList'] as $item1) {
                    $model->recordTypeWhiteList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->supportDDLTypes = [];
                $n1 = 0;
                foreach ($map['SupportDDLTypes'] as $item1) {
                    $model->supportDDLTypes[$n1] = $item1;
                    ++$n1;
                }
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
