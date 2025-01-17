<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class operateCommunitySet extends Model
{
    /**
     * @var string[]
     */
    public $operateCommunity;
    protected $_name = [
        'operateCommunity' => 'OperateCommunity',
    ];

    public function validate()
    {
        if (\is_array($this->operateCommunity)) {
            Model::validateArray($this->operateCommunity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateCommunity) {
            if (\is_array($this->operateCommunity)) {
                $res['OperateCommunity'] = [];
                $n1                      = 0;
                foreach ($this->operateCommunity as $item1) {
                    $res['OperateCommunity'][$n1++] = $item1;
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
        if (isset($map['OperateCommunity'])) {
            if (!empty($map['OperateCommunity'])) {
                $model->operateCommunity = [];
                $n1                      = 0;
                foreach ($map['OperateCommunity'] as $item1) {
                    $model->operateCommunity[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
