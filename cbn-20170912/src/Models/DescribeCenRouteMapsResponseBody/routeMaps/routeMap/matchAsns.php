<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->matchAsn)) {
            Model::validateArray($this->matchAsn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchAsn) {
            if (\is_array($this->matchAsn)) {
                $res['MatchAsn'] = [];
                $n1 = 0;
                foreach ($this->matchAsn as $item1) {
                    $res['MatchAsn'][$n1++] = $item1;
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
        if (isset($map['MatchAsn'])) {
            if (!empty($map['MatchAsn'])) {
                $model->matchAsn = [];
                $n1 = 0;
                foreach ($map['MatchAsn'] as $item1) {
                    $model->matchAsn[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
