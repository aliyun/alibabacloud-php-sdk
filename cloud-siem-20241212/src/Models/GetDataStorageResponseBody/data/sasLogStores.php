<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data;

use AlibabaCloud\Dara\Model;

class sasLogStores extends Model
{
    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logDeliveryGroup;

    /**
     * @var string
     */
    public $logDeliveryPermission;

    /**
     * @var string
     */
    public $logDeliveryStatus;

    /**
     * @var string
     */
    public $logDeliveryUpdateTime;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var string
     */
    public $logSearchConditions;

    /**
     * @var bool
     */
    public $logStoreExisted;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $logStoreTtl;
    protected $_name = [
        'logCode' => 'LogCode',
        'logDeliveryGroup' => 'LogDeliveryGroup',
        'logDeliveryPermission' => 'LogDeliveryPermission',
        'logDeliveryStatus' => 'LogDeliveryStatus',
        'logDeliveryUpdateTime' => 'LogDeliveryUpdateTime',
        'logName' => 'LogName',
        'logSearchConditions' => 'LogSearchConditions',
        'logStoreExisted' => 'LogStoreExisted',
        'logStoreName' => 'LogStoreName',
        'logStoreTtl' => 'LogStoreTtl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logDeliveryGroup) {
            $res['LogDeliveryGroup'] = $this->logDeliveryGroup;
        }

        if (null !== $this->logDeliveryPermission) {
            $res['LogDeliveryPermission'] = $this->logDeliveryPermission;
        }

        if (null !== $this->logDeliveryStatus) {
            $res['LogDeliveryStatus'] = $this->logDeliveryStatus;
        }

        if (null !== $this->logDeliveryUpdateTime) {
            $res['LogDeliveryUpdateTime'] = $this->logDeliveryUpdateTime;
        }

        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }

        if (null !== $this->logSearchConditions) {
            $res['LogSearchConditions'] = $this->logSearchConditions;
        }

        if (null !== $this->logStoreExisted) {
            $res['LogStoreExisted'] = $this->logStoreExisted;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logStoreTtl) {
            $res['LogStoreTtl'] = $this->logStoreTtl;
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
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogDeliveryGroup'])) {
            $model->logDeliveryGroup = $map['LogDeliveryGroup'];
        }

        if (isset($map['LogDeliveryPermission'])) {
            $model->logDeliveryPermission = $map['LogDeliveryPermission'];
        }

        if (isset($map['LogDeliveryStatus'])) {
            $model->logDeliveryStatus = $map['LogDeliveryStatus'];
        }

        if (isset($map['LogDeliveryUpdateTime'])) {
            $model->logDeliveryUpdateTime = $map['LogDeliveryUpdateTime'];
        }

        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }

        if (isset($map['LogSearchConditions'])) {
            $model->logSearchConditions = $map['LogSearchConditions'];
        }

        if (isset($map['LogStoreExisted'])) {
            $model->logStoreExisted = $map['LogStoreExisted'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogStoreTtl'])) {
            $model->logStoreTtl = $map['LogStoreTtl'];
        }

        return $model;
    }
}
