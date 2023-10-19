<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig\nacosConfig;
use AlibabaCloud\Tea\Model;

class discoveryConfig extends Model
{
    /**
     * @var nacosConfig
     */
    public $nacosConfig;

    /**
     * @example NACOS
     *
     * @var string
     */
    public $rcType;
    protected $_name = [
        'nacosConfig' => 'NacosConfig',
        'rcType'      => 'RcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nacosConfig) {
            $res['NacosConfig'] = null !== $this->nacosConfig ? $this->nacosConfig->toMap() : null;
        }
        if (null !== $this->rcType) {
            $res['RcType'] = $this->rcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NacosConfig'])) {
            $model->nacosConfig = nacosConfig::fromMap($map['NacosConfig']);
        }
        if (isset($map['RcType'])) {
            $model->rcType = $map['RcType'];
        }

        return $model;
    }
}
