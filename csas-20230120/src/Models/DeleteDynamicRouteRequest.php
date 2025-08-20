<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeleteDynamicRouteRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicRouteId;
    protected $_name = [
        'dynamicRouteId' => 'DynamicRouteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicRouteId) {
            $res['DynamicRouteId'] = $this->dynamicRouteId;
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
        if (isset($map['DynamicRouteId'])) {
            $model->dynamicRouteId = $map['DynamicRouteId'];
        }

        return $model;
    }
}
