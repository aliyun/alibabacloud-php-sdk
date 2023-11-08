<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListWaypointsResponseBody\waypoints;
use AlibabaCloud\Tea\Model;

class ListWaypointsResponseBody extends Model
{
    /**
     * @var string
     */
    public $continue;

    /**
     * @description The request ID.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of waypoint proxy configurations.
     *
     * @var waypoints[]
     */
    public $waypoints;
    protected $_name = [
        'continue'  => 'Continue',
        'requestId' => 'RequestId',
        'waypoints' => 'Waypoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continue) {
            $res['Continue'] = $this->continue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waypoints) {
            $res['Waypoints'] = [];
            if (null !== $this->waypoints && \is_array($this->waypoints)) {
                $n = 0;
                foreach ($this->waypoints as $item) {
                    $res['Waypoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaypointsResponseBody
     */
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
                $n                = 0;
                foreach ($map['Waypoints'] as $item) {
                    $model->waypoints[$n++] = null !== $item ? waypoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
