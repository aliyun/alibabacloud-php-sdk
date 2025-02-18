<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Dara\Model;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $nodeCapacity;
    /**
     * @var string
     */
    public $nodePoolId;
    protected $_name = [
        'nodeCapacity' => 'NodeCapacity',
        'nodePoolId'   => 'NodePoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
