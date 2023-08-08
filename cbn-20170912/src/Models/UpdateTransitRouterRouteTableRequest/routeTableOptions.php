<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteTableRequest;

use AlibabaCloud\Tea\Model;

class routeTableOptions extends Model
{
    /**
     * @example disable
     *
     * @var string
     */
    public $multiRegionECMP;
    protected $_name = [
        'multiRegionECMP' => 'MultiRegionECMP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiRegionECMP) {
            $res['MultiRegionECMP'] = $this->multiRegionECMP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTableOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultiRegionECMP'])) {
            $model->multiRegionECMP = $map['MultiRegionECMP'];
        }

        return $model;
    }
}
