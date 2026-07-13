<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerBootstrapOptionsResponseBody\data;

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
        'available' => 'Available',
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
