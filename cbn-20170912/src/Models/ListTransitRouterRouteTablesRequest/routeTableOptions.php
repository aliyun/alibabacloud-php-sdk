<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest;

use AlibabaCloud\Dara\Model;

class routeTableOptions extends Model
{
    /**
     * @var string
     */
    public $multiRegionECMP;
    protected $_name = [
        'multiRegionECMP' => 'MultiRegionECMP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiRegionECMP) {
            $res['MultiRegionECMP'] = $this->multiRegionECMP;
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
        if (isset($map['MultiRegionECMP'])) {
            $model->multiRegionECMP = $map['MultiRegionECMP'];
        }

        return $model;
    }
}
