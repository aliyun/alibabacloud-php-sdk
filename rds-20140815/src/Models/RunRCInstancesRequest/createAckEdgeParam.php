<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\RunRCInstancesRequest;

use AlibabaCloud\Dara\Model;

class createAckEdgeParam extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $nodePoolId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'nodePoolId' => 'NodePoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }

        return $model;
    }
}
