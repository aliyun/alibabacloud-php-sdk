<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class GetSandboxRebuildOperationRequest extends Model
{
    /**
     * @var string
     */
    public $serviceEndpointId;
    protected $_name = [
        'serviceEndpointId' => 'serviceEndpointId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceEndpointId) {
            $res['serviceEndpointId'] = $this->serviceEndpointId;
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
        if (isset($map['serviceEndpointId'])) {
            $model->serviceEndpointId = $map['serviceEndpointId'];
        }

        return $model;
    }
}
