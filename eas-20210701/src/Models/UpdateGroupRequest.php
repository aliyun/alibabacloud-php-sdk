<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @description The traffic mode. Valid values: auto and customized. auto: The traffic is automatically allocated based on the proportion of the number of instances to the total number of instances. customized: The traffic is allocated based on a custom weight.
     *
     * @example auto
     *
     * @var string
     */
    public $trafficMode;
    protected $_name = [
        'trafficMode' => 'TrafficMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficMode) {
            $res['TrafficMode'] = $this->trafficMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficMode'])) {
            $model->trafficMode = $map['TrafficMode'];
        }

        return $model;
    }
}
