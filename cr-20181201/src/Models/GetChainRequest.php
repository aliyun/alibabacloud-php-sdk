<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetChainRequest extends Model
{
    /**
     * @example chi-0ops0gsmw5x2****
     *
     * @var string
     */
    public $chainId;

    /**
     * @example cri-4cdrlqmhn4gm****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'chainId'    => 'ChainId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
