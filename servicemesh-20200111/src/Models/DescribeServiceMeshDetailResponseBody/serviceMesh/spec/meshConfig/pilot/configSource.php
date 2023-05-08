<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot;

use AlibabaCloud\Tea\Model;

class configSource extends Model
{
    /**
     * @description Indicates whether communication is allowed between external services and services in the mesh. Valid values:
     *
     *   `true`: The communication is allowed.
     *   `false`: The communication is not allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The ID of the Nacos instance that provides external service information.
     *
     * @example mse-cn-tl326******
     *
     * @var string
     */
    public $nacosID;
    protected $_name = [
        'enabled' => 'Enabled',
        'nacosID' => 'NacosID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->nacosID) {
            $res['NacosID'] = $this->nacosID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NacosID'])) {
            $model->nacosID = $map['NacosID'];
        }

        return $model;
    }
}
