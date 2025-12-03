<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models;

use AlibabaCloud\Dara\Model;

class GetEveryOneSellsFormListRequest extends Model
{
    /**
     * @var string
     */
    public $auth;
    protected $_name = [
        'auth' => 'Auth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
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
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }

        return $model;
    }
}
