<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\predicates;

use AlibabaCloud\Tea\Model;

class pathPredicates extends Model
{
    /**
     * @description Specifies whether to ignore case sensitivity.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreCase;

    /**
     * @description The path.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The route matching type. Valid values:
     *
     *   PRE: prefix matching
     *   EQUAL: exact matching
     *   ERGULAR: regular expression matching
     *
     * @example PRE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ignoreCase' => 'IgnoreCase',
        'path'       => 'Path',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreCase) {
            $res['IgnoreCase'] = $this->ignoreCase;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathPredicates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreCase'])) {
            $model->ignoreCase = $map['IgnoreCase'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
