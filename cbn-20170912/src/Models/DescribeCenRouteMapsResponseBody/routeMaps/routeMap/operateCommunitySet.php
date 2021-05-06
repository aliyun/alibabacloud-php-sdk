<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCommunity) {
            $res['OperateCommunity'] = $this->operateCommunity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateCommunitySet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateCommunity'])) {
            if (!empty($map['OperateCommunity'])) {
                $model->operateCommunity = $map['OperateCommunity'];
            }
        }

        return $model;
    }
}
