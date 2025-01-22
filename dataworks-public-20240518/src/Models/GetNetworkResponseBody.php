<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNetworkResponseBody\network;

class GetNetworkResponseBody extends Model
{
    /**
     * @var network
     */
    public $network;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'network'   => 'Network',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
