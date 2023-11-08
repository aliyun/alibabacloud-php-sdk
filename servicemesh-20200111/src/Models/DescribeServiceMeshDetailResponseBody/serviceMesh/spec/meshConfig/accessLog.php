<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class accessLog extends Model
{
    /**
     * @description Indicates whether access log collection is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the Simple Log Service project that stores access logs.
     *
     * @example k8s-log-b7b05d08670e41ca8c8fc0b7718f*****
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
     * @return accessLog
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
