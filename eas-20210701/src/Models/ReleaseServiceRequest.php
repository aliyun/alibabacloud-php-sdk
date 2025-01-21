<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ReleaseServiceRequest extends Model
{
    /**
     * @var string
     */
    public $trafficState;
    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'trafficState' => 'TrafficState',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
