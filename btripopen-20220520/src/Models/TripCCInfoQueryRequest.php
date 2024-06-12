<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TripCCInfoQueryRequest extends Model
{
    /**
     * @example 2024060710160003300008684
     *
     * @var string
     */
    public $businessInstanceId;

    /**
     * @example 458003
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 2024060710160003300008684
     *
     * @var string
     */
    public $thirdBusinessId;
    protected $_name = [
        'businessInstanceId' => 'business_instance_id',
        'nodeId'             => 'node_id',
        'thirdBusinessId'    => 'third_business_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessInstanceId) {
            $res['business_instance_id'] = $this->businessInstanceId;
        }
        if (null !== $this->nodeId) {
            $res['node_id'] = $this->nodeId;
        }
        if (null !== $this->thirdBusinessId) {
            $res['third_business_id'] = $this->thirdBusinessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TripCCInfoQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_instance_id'])) {
            $model->businessInstanceId = $map['business_instance_id'];
        }
        if (isset($map['node_id'])) {
            $model->nodeId = $map['node_id'];
        }
        if (isset($map['third_business_id'])) {
            $model->thirdBusinessId = $map['third_business_id'];
        }

        return $model;
    }
}
