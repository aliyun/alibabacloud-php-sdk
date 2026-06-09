<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class TurnOnZoneRequest extends Model
{
    /**
     * @var bool
     */
    public $hpAlbZoneDrained;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'hpAlbZoneDrained' => 'hpAlbZoneDrained',
        'zone' => 'zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hpAlbZoneDrained) {
            $res['hpAlbZoneDrained'] = $this->hpAlbZoneDrained;
        }

        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
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
        if (isset($map['hpAlbZoneDrained'])) {
            $model->hpAlbZoneDrained = $map['hpAlbZoneDrained'];
        }

        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }

        return $model;
    }
}
