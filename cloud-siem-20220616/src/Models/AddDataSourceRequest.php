<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddDataSourceRequest extends Model
{
    /**
     * @description The ID of the cloud account.
     *
     * @example 123xxxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The code of the cloud service provider.
     *
     * Valid values:
     *
     *   qcloud
     *   hcloud
     *   aliyun
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The name of the data source.
     *
     * @example beijing_waf_kafka
     *
     * @var string
     */
    public $dataSourceInstanceName;

    /**
     * @description The parameters of the data source. Set this parameter to a JSON array.
     *
     * @example [{"paraCode":"region_code","paraValue":"ap-guangzhou"}]
     *
     * @var string
     */
    public $dataSourceInstanceParams;

    /**
     * @description The remarks on the data source.
     *
     * @example waf_alert_log
     *
     * @var string
     */
    public $dataSourceInstanceRemark;

    /**
     * @description The type of the data source. Valid values:
     *
     *   obs: Huawei Cloud Object Storage Service (OBS)
     *   wafApi: download API of Tencent Cloud Web Application Firewall (WAF)
     *   ckafka: Tencent Cloud Kafka (CKafka)
     *
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId'                => 'AccountId',
        'cloudCode'                => 'CloudCode',
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
     * @return AddDataSourceRequest
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
