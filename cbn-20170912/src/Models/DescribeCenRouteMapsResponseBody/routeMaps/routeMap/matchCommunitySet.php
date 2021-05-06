<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class matchCommunitySet extends Model
{
    /**
     * @var string[]
     */
    public $matchCommunity;
    protected $_name = [
        'matchCommunity' => 'MatchCommunity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchCommunity) {
            $res['MatchCommunity'] = $this->matchCommunity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchCommunitySet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchCommunity'])) {
            if (!empty($map['MatchCommunity'])) {
                $model->matchCommunity = $map['MatchCommunity'];
            }
        }

        return $model;
    }
}
