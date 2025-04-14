<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs;

use AlibabaCloud\Dara\Model;

class regionList extends Model
{
    /**
     * @var int
     */
    public $block;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'block' => 'Block',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->block) {
            $res['Block'] = $this->block;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Block'])) {
            $model->block = $map['Block'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
