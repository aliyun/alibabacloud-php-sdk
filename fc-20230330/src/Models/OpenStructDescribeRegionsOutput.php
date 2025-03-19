<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\SDK\FC\V20230330\Models\OpenStructDescribeRegionsOutput\regions;
use AlibabaCloud\Tea\Model;

class OpenStructDescribeRegionsOutput extends Model
{
    /**
     * @var regions
     */
    public $regions;
    protected $_name = [
        'regions' => 'Regions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenStructDescribeRegionsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }

        return $model;
    }
}
