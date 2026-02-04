<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesResponseBody\dataSources;

use AlibabaCloud\Dara\Model;

class dataSourceStores extends Model
{
    /**
     * @var int
     */
    public $checkTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceStoreFrom;

    /**
     * @var string
     */
    public $dataSourceStoreId;

    /**
     * @var string
     */
    public $dataSourceStoreStatus;

    /**
     * @var string
     */
    public $dataSourceStoreStatusCode;

    /**
     * @var string
     */
    public $logProjectName;

    /**
     * @var string
     */
    public $logRegionId;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'checkTime' => 'CheckTime',
        'createTime' => 'CreateTime',
        'dataSourceStoreFrom' => 'DataSourceStoreFrom',
        'dataSourceStoreId' => 'DataSourceStoreId',
        'dataSourceStoreStatus' => 'DataSourceStoreStatus',
        'dataSourceStoreStatusCode' => 'DataSourceStoreStatusCode',
        'logProjectName' => 'LogProjectName',
        'logRegionId' => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceStoreFrom) {
            $res['DataSourceStoreFrom'] = $this->dataSourceStoreFrom;
        }

        if (null !== $this->dataSourceStoreId) {
            $res['DataSourceStoreId'] = $this->dataSourceStoreId;
        }

        if (null !== $this->dataSourceStoreStatus) {
            $res['DataSourceStoreStatus'] = $this->dataSourceStoreStatus;
        }

        if (null !== $this->dataSourceStoreStatusCode) {
            $res['DataSourceStoreStatusCode'] = $this->dataSourceStoreStatusCode;
        }

        if (null !== $this->logProjectName) {
            $res['LogProjectName'] = $this->logProjectName;
        }

        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSourceStoreFrom'])) {
            $model->dataSourceStoreFrom = $map['DataSourceStoreFrom'];
        }

        if (isset($map['DataSourceStoreId'])) {
            $model->dataSourceStoreId = $map['DataSourceStoreId'];
        }

        if (isset($map['DataSourceStoreStatus'])) {
            $model->dataSourceStoreStatus = $map['DataSourceStoreStatus'];
        }

        if (isset($map['DataSourceStoreStatusCode'])) {
            $model->dataSourceStoreStatusCode = $map['DataSourceStoreStatusCode'];
        }

        if (isset($map['LogProjectName'])) {
            $model->logProjectName = $map['LogProjectName'];
        }

        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
