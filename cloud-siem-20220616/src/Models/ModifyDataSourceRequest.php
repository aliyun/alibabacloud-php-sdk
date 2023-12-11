<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataSourceRequest extends Model
{
    /**
     * @example 123xxxxxx
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
     * @example beijing_waf_kafka
     *
     * @var string
     */
    public $dataSourceInstanceName;

    /**
     * @example [{"paraCode":"region_code","paraValue":"ap-guangzhou"}]
     *
     * @var string
     */
    public $dataSourceInstanceParams;

    /**
     * @example waf_alert_log
     *
     * @var string
     */
    public $dataSourceInstanceRemark;

    /**
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId'                => 'AccountId',
        'cloudCode'                => 'CloudCode',
        'dataSourceInstanceId'     => 'DataSourceInstanceId',
        'dataSourceInstanceName'   => 'DataSourceInstanceName',
        'dataSourceInstanceParams' => 'DataSourceInstanceParams',
        'dataSourceInstanceRemark' => 'DataSourceInstanceRemark',
        'dataSourceType'           => 'DataSourceType',
        'regionId'                 => 'RegionId',
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

    /**
     * @param array $map
     *
     * @return ModifyDataSourceRequest
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
