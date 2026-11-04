<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGatewayApiResponseBody\api;

use AlibabaCloud\Dara\Model;

class defaultLimitRule extends Model
{
    /**
     * @var bool
     */
    public $defaultLimit;
    protected $_name = [
        'defaultLimit' => 'DefaultLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultLimit) {
            $res['DefaultLimit'] = $this->defaultLimit;
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
        if (isset($map['DefaultLimit'])) {
            $model->defaultLimit = $map['DefaultLimit'];
        }

        return $model;
    }
}
