<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class GetDiscoveryEndpointsOutput extends Model
{
    /**
     * @var DiscoveryEndpoint[]
     */
    public $discoveryEndpoints;
    protected $_name = [
        'discoveryEndpoints' => 'discoveryEndpoints',
    ];

    public function validate()
    {
        if (\is_array($this->discoveryEndpoints)) {
            Model::validateArray($this->discoveryEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveryEndpoints) {
            if (\is_array($this->discoveryEndpoints)) {
                $res['discoveryEndpoints'] = [];
                $n1 = 0;
                foreach ($this->discoveryEndpoints as $item1) {
                    $res['discoveryEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['discoveryEndpoints'])) {
            if (!empty($map['discoveryEndpoints'])) {
                $model->discoveryEndpoints = [];
                $n1 = 0;
                foreach ($map['discoveryEndpoints'] as $item1) {
                    $model->discoveryEndpoints[$n1] = DiscoveryEndpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
