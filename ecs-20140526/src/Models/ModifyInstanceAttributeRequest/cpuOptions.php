<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @description The CPU topology type of the instance. Valid values:
     *
     * >- Before you specify this parameter, make sure that the instance is in the Stopped state.
     * @example DiscreteCoreToHTMapping
     *
     * @var string
     */
    public $topologyType;
    protected $_name = [
        'topologyType' => 'TopologyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        return $model;
    }
}
