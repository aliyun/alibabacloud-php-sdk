<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateDedicatedHostClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
