<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @description The maximum number of sessions to which a resource can connect at the same time. If a resource connects to a large number of sessions at the same time, user experience can be compromised. The value range varies based on the resource type. The following items describe the value ranges of different resource types:
     *
     *   appstreaming.general.4c8g: 1 to 2
     *   appstreaming.general.8c16g: 1 to 4
     *   appstreaming.vgpu.8c16g.4g: 1 to 4
     *   appstreaming.vgpu.8c31g.16g: 1 to 4
     *   appstreaming.vgpu.14c93g.12g: 1 to 6
     *
     * @example 2
     *
     * @var int
     */
    public $nodeCapacity;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-ew7va2g1wl3vm****
     *
     * @var string
     */
    public $nodePoolId;
    protected $_name = [
        'nodeCapacity' => 'NodeCapacity',
        'nodePoolId' => 'NodePoolId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeCapacity) {
            $res['NodeCapacity'] = $this->nodeCapacity;
        }
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeCapacity'])) {
            $model->nodeCapacity = $map['NodeCapacity'];
        }
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }

        return $model;
    }
}
