<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigNetworkRegionBlockRequest extends Model
{
    /**
     * @description The details of the configurations of blocked locations. This parameter is a JSON string. The value consists of the following fields:
     *
     *   **RegionBlockSwitch**: the status of the location blacklist feature. This field is required and must be of the string type. Valid values:
     *
     *   **on**
     *   **off**
     *
     *   **Countries**: the codes of the countries and areas from which you want to block requests. This field is optional and must be of the array type.
     *
     **
     *
     **Note** For more information about the codes of countries and areas, see [Location parameters](https://help.aliyun.com/document_detail/167926.html).
     *
     *   **Provinces**: the codes of the administrative regions in China from which you want to block requests. This field is optional and must be of the array type.
     *
     **
     *
     **Note** For more information about the codes of administrative regions in China, see [Location parameters](https://help.aliyun.com/document_detail/167926.html).
     *
     * This parameter is required.
     * @example {"RegionBlockSwitch":"off","Countries":[],"Provinces":[11,12,13,14,15,21,22,23,31,32,33,34,35,36,37,41,42,43,44,45,46,50,51,52,53,54,61,62,63,64,65,71,81,82]}
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'config'     => 'Config',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigNetworkRegionBlockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
