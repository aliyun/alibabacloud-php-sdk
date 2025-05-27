<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

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
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceRemark;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var int
     */
    public $logCount;

    /**
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'cloudCode' => 'CloudCode',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourceRemark' => 'DataSourceRemark',
        'dataSourceType' => 'DataSourceType',
        'logCount' => 'LogCount',
        'taskCount' => 'TaskCount',
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
