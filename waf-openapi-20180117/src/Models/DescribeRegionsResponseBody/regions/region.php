<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $display;
    protected $_name = [
        'region'  => 'Region',
        'display' => 'Display',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        return $model;
    }
}
