<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeGroupShrinkRequest extends Model
{
    /**
     * @description Cluster ID
     *
     * This parameter is required.
     *
     * @example i118191731740041623425
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Node ID.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $nodeGroupShrink;

    /**
     * @description Node information
     *
     * @example {\\"NodeUnitId\\":\\"3c2999a8-2b95-4409-93c5-ad3985fc5c9f\\",\\"ResourceGroupId\\":\\"\\",\\"MaxNodes\\":0,\\"NodeUnitName\\":\\"asi_cn-serverless-sale_e01-lingjun-psale\\"}
     *
     * @var string
     */
    public $nodeUnitShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodeGroupShrink' => 'NodeGroup',
        'nodeUnitShrink' => 'NodeUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->nodeGroupShrink) {
            $res['NodeGroup'] = $this->nodeGroupShrink;
        }
        if (null !== $this->nodeUnitShrink) {
            $res['NodeUnit'] = $this->nodeUnitShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NodeGroup'])) {
            $model->nodeGroupShrink = $map['NodeGroup'];
        }
        if (isset($map['NodeUnit'])) {
            $model->nodeUnitShrink = $map['NodeUnit'];
        }

        return $model;
    }
}
