<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig\nacosConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig\zookeeperConfig;

class discoveryConfig extends Model
{
    /**
     * @var nacosConfig
     */
    public $nacosConfig;
    /**
     * @var string
     */
    public $rcType;
    /**
     * @var zookeeperConfig
     */
    public $zookeeperConfig;
    protected $_name = [
        'nacosConfig'     => 'NacosConfig',
        'rcType'          => 'RcType',
        'zookeeperConfig' => 'ZookeeperConfig',
    ];

    public function validate()
    {
        if (null !== $this->nacosConfig) {
            $this->nacosConfig->validate();
        }
        if (null !== $this->zookeeperConfig) {
            $this->zookeeperConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nacosConfig) {
            $res['NacosConfig'] = null !== $this->nacosConfig ? $this->nacosConfig->toArray($noStream) : $this->nacosConfig;
        }

        if (null !== $this->rcType) {
            $res['RcType'] = $this->rcType;
        }

        if (null !== $this->zookeeperConfig) {
            $res['ZookeeperConfig'] = null !== $this->zookeeperConfig ? $this->zookeeperConfig->toArray($noStream) : $this->zookeeperConfig;
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
        if (isset($map['NacosConfig'])) {
            $model->nacosConfig = nacosConfig::fromMap($map['NacosConfig']);
        }

        if (isset($map['RcType'])) {
            $model->rcType = $map['RcType'];
        }

        if (isset($map['ZookeeperConfig'])) {
            $model->zookeeperConfig = zookeeperConfig::fromMap($map['ZookeeperConfig']);
        }

        return $model;
    }
}
