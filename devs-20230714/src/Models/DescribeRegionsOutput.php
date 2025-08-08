<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DescribeRegionsOutput\regions;

class DescribeRegionsOutput extends Model
{
    /**
     * @var regions
     */
    public $regions;
    protected $_name = [
        'regions' => 'regions',
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
            $res['regions'] = null !== $this->regions ? $this->regions->toArray($noStream) : $this->regions;
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
        if (isset($map['regions'])) {
            $model->regions = regions::fromMap($map['regions']);
        }

        return $model;
    }
}
