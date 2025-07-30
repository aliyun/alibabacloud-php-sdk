<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models;

use AlibabaCloud\Tea\Model;

class GetEveryOneSellsFormListRequest extends Model
{
    /**
     * @var string
     */
    public $auth;
    protected $_name = [
        'auth' => 'Auth',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEveryOneSellsFormListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }

        return $model;
    }
}
