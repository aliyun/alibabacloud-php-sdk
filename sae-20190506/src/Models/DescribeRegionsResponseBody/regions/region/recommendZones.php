<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions\region;

use AlibabaCloud\Tea\Model;

class recommendZones extends Model
{
    /**
     * @var string[]
     */
    public $recommendZone;
    protected $_name = [
        'recommendZone' => 'RecommendZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendZone) {
            $res['RecommendZone'] = $this->recommendZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendZone'])) {
            if (!empty($map['RecommendZone'])) {
                $model->recommendZone = $map['RecommendZone'];
            }
        }

        return $model;
    }
}
