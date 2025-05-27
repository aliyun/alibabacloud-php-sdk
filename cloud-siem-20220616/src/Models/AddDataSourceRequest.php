<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class AddDataSourceRequest extends Model
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
    public $dataSourceInstanceName;

    /**
     * @var string
     */
    public $dataSourceInstanceParams;

    /**
     * @var string
     */
    public $dataSourceInstanceRemark;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId' => 'AccountId',
        'cloudCode' => 'CloudCode',
        'dataSourceInstanceName' => 'DataSourceInstanceName',
        'dataSourceInstanceParams' => 'DataSourceInstanceParams',
        'dataSourceInstanceRemark' => 'DataSourceInstanceRemark',
        'dataSourceType' => 'DataSourceType',
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

        if (null !== $this->dataSourceInstanceName) {
            $res['DataSourceInstanceName'] = $this->dataSourceInstanceName;
        }

        if (null !== $this->dataSourceInstanceParams) {
            $res['DataSourceInstanceParams'] = $this->dataSourceInstanceParams;
        }

        if (null !== $this->dataSourceInstanceRemark) {
            $res['DataSourceInstanceRemark'] = $this->dataSourceInstanceRemark;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
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

        if (isset($map['DataSourceInstanceName'])) {
            $model->dataSourceInstanceName = $map['DataSourceInstanceName'];
        }

        if (isset($map['DataSourceInstanceParams'])) {
            $model->dataSourceInstanceParams = $map['DataSourceInstanceParams'];
        }

        if (isset($map['DataSourceInstanceRemark'])) {
            $model->dataSourceInstanceRemark = $map['DataSourceInstanceRemark'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
