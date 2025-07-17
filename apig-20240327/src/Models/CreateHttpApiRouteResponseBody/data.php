<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The route ID.
     *
     * @example hr-cr82undlhtgrlej***
     *
     * @var string
     */
    public $routeId;
    protected $_name = [
        'routeId' => 'routeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
