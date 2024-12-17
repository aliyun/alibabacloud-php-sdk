<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute;

use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\predicates\headerPredicates;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\predicates\pathPredicates;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\predicates\queryPredicates;
use AlibabaCloud\Tea\Model;

class predicates extends Model
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
     * @return predicates
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
