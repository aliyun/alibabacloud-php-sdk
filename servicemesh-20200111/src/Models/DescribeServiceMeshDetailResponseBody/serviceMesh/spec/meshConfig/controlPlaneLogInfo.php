<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class controlPlaneLogInfo extends Model
{
    /**
     * @description Indicates whether the collection of control-plane logs is enabled. Valid values:
     *
     *   `true`: The collection of control-plane logs is enabled.
     *   `false`: The collection of control-plane logs is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the Log Service project that stores control-plane logs.
     *
     * @example mesh-log-cbeb85a09161b4a26ab73e0ac****
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'enabled' => 'Enabled',
        'project' => 'Project',
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
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPlaneLogInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
