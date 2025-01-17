<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->matchCommunity)) {
            Model::validateArray($this->matchCommunity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchCommunity) {
            if (\is_array($this->matchCommunity)) {
                $res['MatchCommunity'] = [];
                $n1                    = 0;
                foreach ($this->matchCommunity as $item1) {
                    $res['MatchCommunity'][$n1++] = $item1;
                }
            }
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
        if (isset($map['MatchCommunity'])) {
            if (!empty($map['MatchCommunity'])) {
                $model->matchCommunity = [];
                $n1                    = 0;
                foreach ($map['MatchCommunity'] as $item1) {
                    $model->matchCommunity[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
