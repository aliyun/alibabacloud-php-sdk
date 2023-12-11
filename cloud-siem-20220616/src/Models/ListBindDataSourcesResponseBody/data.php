<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example sas_tq_account_xxxx
     *
     * @var string
     */
    public $accountName;

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
     * @example waf_kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example waf_kafka
     *
     * @var string
     */
    public $dataSourceRemark;

    /**
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $logCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'accountId'            => 'AccountId',
        'accountName'          => 'AccountName',
        'cloudCode'            => 'CloudCode',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
        'dataSourceName'       => 'DataSourceName',
        'dataSourceRemark'     => 'DataSourceRemark',
        'dataSourceType'       => 'DataSourceType',
        'logCount'             => 'LogCount',
        'taskCount'            => 'TaskCount',
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
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->dataSourceInstanceId) {
            $res['DataSourceInstanceId'] = $this->dataSourceInstanceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceRemark) {
            $res['DataSourceRemark'] = $this->dataSourceRemark;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceInstanceId'])) {
            $model->dataSourceInstanceId = $map['DataSourceInstanceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceRemark'])) {
            $model->dataSourceRemark = $map['DataSourceRemark'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
