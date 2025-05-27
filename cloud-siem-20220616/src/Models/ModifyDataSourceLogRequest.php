<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class ModifyDataSourceLogRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @var string
     */
    public $dataSourceInstanceLogs;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId' => 'AccountId',
        'cloudCode' => 'CloudCode',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
        'dataSourceInstanceLogs' => 'DataSourceInstanceLogs',
        'dataSourceType' => 'DataSourceType',
        'logCode' => 'LogCode',
        'logInstanceId' => 'LogInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->dataSourceInstanceId) {
            $res['DataSourceInstanceId'] = $this->dataSourceInstanceId;
        }

        if (null !== $this->dataSourceInstanceLogs) {
            $res['DataSourceInstanceLogs'] = $this->dataSourceInstanceLogs;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['DataSourceInstanceId'])) {
            $model->dataSourceInstanceId = $map['DataSourceInstanceId'];
        }

        if (isset($map['DataSourceInstanceLogs'])) {
            $model->dataSourceInstanceLogs = $map['DataSourceInstanceLogs'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
