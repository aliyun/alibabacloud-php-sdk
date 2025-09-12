<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $trafficMode;
    protected $_name = [
        'trafficMode' => 'TrafficMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficMode) {
            $res['TrafficMode'] = $this->trafficMode;
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
        if (isset($map['TrafficMode'])) {
            $model->trafficMode = $map['TrafficMode'];
        }

        return $model;
    }
}
