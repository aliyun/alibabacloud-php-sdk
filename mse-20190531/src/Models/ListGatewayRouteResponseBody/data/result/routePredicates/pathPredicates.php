<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routePredicates;

use AlibabaCloud\Dara\Model;

class pathPredicates extends Model
{
    /**
     * @var bool
     */
    public $ignoreCase;
    /**
     * @var string
     */
    public $path;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
