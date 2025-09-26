<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class MCPServiceConfig extends Model
{
    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
