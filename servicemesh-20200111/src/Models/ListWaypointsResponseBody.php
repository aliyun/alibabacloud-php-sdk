<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListWaypointsResponseBody\waypoints;

class ListWaypointsResponseBody extends Model
{
    /**
     * @var string
     */
    public $continue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waypoints[]
     */
    public $waypoints;
    protected $_name = [
        'continue' => 'Continue',
        'requestId' => 'RequestId',
        'waypoints' => 'Waypoints',
    ];

    public function validate()
    {
        if (\is_array($this->waypoints)) {
            Model::validateArray($this->waypoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continue) {
            $res['Continue'] = $this->continue;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waypoints) {
            if (\is_array($this->waypoints)) {
                $res['Waypoints'] = [];
                $n1 = 0;
                foreach ($this->waypoints as $item1) {
                    $res['Waypoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Continue'])) {
            $model->continue = $map['Continue'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Waypoints'])) {
            if (!empty($map['Waypoints'])) {
                $model->waypoints = [];
                $n1 = 0;
                foreach ($map['Waypoints'] as $item1) {
                    $model->waypoints[$n1] = waypoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
