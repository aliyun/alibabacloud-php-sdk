<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodeModels extends Model
{
    /**
     * @description The billing method of the resource node.
     *
     * >  This parameter is returned only if the ChargeResourceMode parameter of the delivery group to which the resource node belongs is set to Node.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   Prepaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the resource node.
     *
     * >  This parameter is returned only if the ChargeResourceMode parameter of the delivery group to which the resource node belongs is set to Node.
     *
     * @example i-bp13********
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
