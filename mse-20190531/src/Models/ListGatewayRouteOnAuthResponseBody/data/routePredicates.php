<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data\routePredicates\pathPredicates;

class routePredicates extends Model
{
    /**
     * @var pathPredicates
     */
    public $pathPredicates;
    protected $_name = [
        'pathPredicates' => 'PathPredicates',
    ];

    public function validate()
    {
        if (null !== $this->pathPredicates) {
            $this->pathPredicates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pathPredicates) {
            $res['PathPredicates'] = null !== $this->pathPredicates ? $this->pathPredicates->toArray($noStream) : $this->pathPredicates;
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
        if (isset($map['PathPredicates'])) {
            $model->pathPredicates = pathPredicates::fromMap($map['PathPredicates']);
        }

        return $model;
    }
}
