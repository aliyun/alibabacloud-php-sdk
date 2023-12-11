<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddDataSourceLogRequest extends Model
{
    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
     *
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @example [{"LogCode":"cloud_siem_qcloud_waf_alert_log","LogParas":"[{\"ParaCode\":\"api_name\",\"ParaValue\":\"GetAttackDownloadRecords\"}]"}]
     *
     * @var string
     */
    public $dataSourceInstanceLogs;

    /**
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId'              => 'AccountId',
        'cloudCode'              => 'CloudCode',
        'dataSourceInstanceId'   => 'DataSourceInstanceId',
        'dataSourceInstanceLogs' => 'DataSourceInstanceLogs',
        'logCode'                => 'LogCode',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataSourceLogRequest
     */
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
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
