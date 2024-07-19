<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ReleaseServiceRequest extends Model
{
    /**
     * @description The traffic state. Valid values:
     *
     *   standalone: independent traffic.
     *   grouping: grouped traffic.
     *
     * @example grouping
     *
     * @var string
     */
    public $trafficState;

    /**
     * @description The weight of the canary release. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'trafficState' => 'TrafficState',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
