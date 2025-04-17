<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FC\V20230330\Models\DescribeRegionsOutput\regions;

class DescribeRegionsOutput extends Model
{
    /**
     * @var regions
     */
    public $regions;
    protected $_name = [
        'regions' => 'Regions',
    ];

    public function validate()
    {
        if (null !== $this->regions) {
            $this->regions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toArray($noStream) : $this->regions;
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
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }

        return $model;
    }
}
