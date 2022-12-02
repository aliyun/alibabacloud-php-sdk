<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\transferStepConfig;

use AlibabaCloud\Tea\Model;

class incrSyncStepTransferConfig extends Model
{
    /**
     * @var string[]
     */
    public $recordTypeList;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var int
     */
    public $storeLogKeptHour;

    /**
     * @var bool
     */
    public $storeTransactionEnabled;

    /**
     * @var string
     */
    public $transferStepType;
    protected $_name = [
        'recordTypeList'          => 'RecordTypeList',
        'startTimestamp'          => 'StartTimestamp',
        'storeLogKeptHour'        => 'StoreLogKeptHour',
        'storeTransactionEnabled' => 'StoreTransactionEnabled',
        'transferStepType'        => 'TransferStepType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordTypeList) {
            $res['RecordTypeList'] = $this->recordTypeList;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->storeLogKeptHour) {
            $res['StoreLogKeptHour'] = $this->storeLogKeptHour;
        }
        if (null !== $this->storeTransactionEnabled) {
            $res['StoreTransactionEnabled'] = $this->storeTransactionEnabled;
        }
        if (null !== $this->transferStepType) {
            $res['TransferStepType'] = $this->transferStepType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incrSyncStepTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordTypeList'])) {
            if (!empty($map['RecordTypeList'])) {
                $model->recordTypeList = $map['RecordTypeList'];
            }
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['StoreLogKeptHour'])) {
            $model->storeLogKeptHour = $map['StoreLogKeptHour'];
        }
        if (isset($map['StoreTransactionEnabled'])) {
            $model->storeTransactionEnabled = $map['StoreTransactionEnabled'];
        }
        if (isset($map['TransferStepType'])) {
            $model->transferStepType = $map['TransferStepType'];
        }

        return $model;
    }
}
