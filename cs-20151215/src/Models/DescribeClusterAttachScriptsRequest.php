<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest\options;
use AlibabaCloud\Tea\Model;

class DescribeClusterAttachScriptsRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 节点CPU架构,支持amd64、arm、arm64。
     *
     * @var string
     */
    public $arch;

    /**
     * @description 边缘托管版集群节点的接入配置。
     *
     * @var options
     */
    public $options;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'arch'      => 'arch',
        'options'   => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAttachScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }
        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }

        return $model;
    }
}
