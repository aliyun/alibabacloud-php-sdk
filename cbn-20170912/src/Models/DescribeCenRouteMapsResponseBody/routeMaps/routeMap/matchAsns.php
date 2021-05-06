<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class matchAsns extends Model
{
    /**
     * @var string[]
     */
    public $matchAsn;
    protected $_name = [
        'matchAsn' => 'MatchAsn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchAsn) {
            $res['MatchAsn'] = $this->matchAsn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchAsns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchAsn'])) {
            if (!empty($map['MatchAsn'])) {
                $model->matchAsn = $map['MatchAsn'];
            }
        }

        return $model;
    }
}
