<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataSourceParametersRequest extends Model
{
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
     * @description The type of the data source. Valid values:
     *
     *   **ckafka**: Tencent Cloud TDMQ for CKafka
     *   **obs**: Huawei Cloud Object Storage Service (OBS)
     *   **wafApi**: download API of Tencent Cloud Web Application Firewall (WAF)
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
        'cloudCode'      => 'CloudCode',
        'dataSourceType' => 'DataSourceType',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
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
     * @return DescribeDataSourceParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
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
