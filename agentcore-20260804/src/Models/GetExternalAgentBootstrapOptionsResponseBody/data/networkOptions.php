<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class networkOptions extends Model
{
    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $networkType;
    protected $_name = [
        'available' => 'available',
        'networkType' => 'networkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
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
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        return $model;
    }
}
