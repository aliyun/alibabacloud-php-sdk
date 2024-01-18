<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The code of the third-party cloud service.
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

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
    protected $_name = [
        'cloudCode'      => 'CloudCode',
        'dataSourceType' => 'DataSourceType',
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
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
