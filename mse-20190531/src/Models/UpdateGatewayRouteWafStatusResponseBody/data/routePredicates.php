<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\headerPredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\pathPredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\queryPredicates;
use AlibabaCloud\Tea\Model;

class routePredicates extends Model
{
    /**
     * @description The rules for matching based on request headers.
     *
     * @var headerPredicates[]
     */
    public $headerPredicates;

    /**
     * @description The information about method matching.
     *
     * @var string[]
     */
    public $methodPredicates;

    /**
     * @description The information about route matching.
     *
     * @var pathPredicates
     */
    public $pathPredicates;

    /**
     * @description The information about parameter matching.
     *
     * @var queryPredicates[]
     */
    public $queryPredicates;
    protected $_name = [
        'headerPredicates' => 'HeaderPredicates',
        'methodPredicates' => 'MethodPredicates',
        'pathPredicates'   => 'PathPredicates',
        'queryPredicates'  => 'QueryPredicates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerPredicates) {
            $res['HeaderPredicates'] = [];
            if (null !== $this->headerPredicates && \is_array($this->headerPredicates)) {
                $n = 0;
                foreach ($this->headerPredicates as $item) {
                    $res['HeaderPredicates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->methodPredicates) {
            $res['MethodPredicates'] = $this->methodPredicates;
        }
        if (null !== $this->pathPredicates) {
            $res['PathPredicates'] = null !== $this->pathPredicates ? $this->pathPredicates->toMap() : null;
        }
        if (null !== $this->queryPredicates) {
            $res['QueryPredicates'] = [];
            if (null !== $this->queryPredicates && \is_array($this->queryPredicates)) {
                $n = 0;
                foreach ($this->queryPredicates as $item) {
                    $res['QueryPredicates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routePredicates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderPredicates'])) {
            if (!empty($map['HeaderPredicates'])) {
                $model->headerPredicates = [];
                $n                       = 0;
                foreach ($map['HeaderPredicates'] as $item) {
                    $model->headerPredicates[$n++] = null !== $item ? headerPredicates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MethodPredicates'])) {
            if (!empty($map['MethodPredicates'])) {
                $model->methodPredicates = $map['MethodPredicates'];
            }
        }
        if (isset($map['PathPredicates'])) {
            $model->pathPredicates = pathPredicates::fromMap($map['PathPredicates']);
        }
        if (isset($map['QueryPredicates'])) {
            if (!empty($map['QueryPredicates'])) {
                $model->queryPredicates = [];
                $n                      = 0;
                foreach ($map['QueryPredicates'] as $item) {
                    $model->queryPredicates[$n++] = null !== $item ? queryPredicates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
