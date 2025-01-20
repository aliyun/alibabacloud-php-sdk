<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\headerPredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\pathPredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates\queryPredicates;

class routePredicates extends Model
{
    /**
     * @var headerPredicates[]
     */
    public $headerPredicates;
    /**
     * @var string[]
     */
    public $methodPredicates;
    /**
     * @var pathPredicates
     */
    public $pathPredicates;
    /**
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
        if (\is_array($this->headerPredicates)) {
            Model::validateArray($this->headerPredicates);
        }
        if (\is_array($this->methodPredicates)) {
            Model::validateArray($this->methodPredicates);
        }
        if (null !== $this->pathPredicates) {
            $this->pathPredicates->validate();
        }
        if (\is_array($this->queryPredicates)) {
            Model::validateArray($this->queryPredicates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerPredicates) {
            if (\is_array($this->headerPredicates)) {
                $res['HeaderPredicates'] = [];
                $n1                      = 0;
                foreach ($this->headerPredicates as $item1) {
                    $res['HeaderPredicates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->methodPredicates) {
            if (\is_array($this->methodPredicates)) {
                $res['MethodPredicates'] = [];
                $n1                      = 0;
                foreach ($this->methodPredicates as $item1) {
                    $res['MethodPredicates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pathPredicates) {
            $res['PathPredicates'] = null !== $this->pathPredicates ? $this->pathPredicates->toArray($noStream) : $this->pathPredicates;
        }

        if (null !== $this->queryPredicates) {
            if (\is_array($this->queryPredicates)) {
                $res['QueryPredicates'] = [];
                $n1                     = 0;
                foreach ($this->queryPredicates as $item1) {
                    $res['QueryPredicates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HeaderPredicates'])) {
            if (!empty($map['HeaderPredicates'])) {
                $model->headerPredicates = [];
                $n1                      = 0;
                foreach ($map['HeaderPredicates'] as $item1) {
                    $model->headerPredicates[$n1++] = headerPredicates::fromMap($item1);
                }
            }
        }

        if (isset($map['MethodPredicates'])) {
            if (!empty($map['MethodPredicates'])) {
                $model->methodPredicates = [];
                $n1                      = 0;
                foreach ($map['MethodPredicates'] as $item1) {
                    $model->methodPredicates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PathPredicates'])) {
            $model->pathPredicates = pathPredicates::fromMap($map['PathPredicates']);
        }

        if (isset($map['QueryPredicates'])) {
            if (!empty($map['QueryPredicates'])) {
                $model->queryPredicates = [];
                $n1                     = 0;
                foreach ($map['QueryPredicates'] as $item1) {
                    $model->queryPredicates[$n1++] = queryPredicates::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
