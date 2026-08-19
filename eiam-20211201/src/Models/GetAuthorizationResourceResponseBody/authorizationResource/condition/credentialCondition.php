<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationResourceResponseBody\authorizationResource\condition;

use AlibabaCloud\Dara\Model;

class credentialCondition extends Model
{
    /**
     * @var bool
     */
    public $allowSameNameIdentity;
    protected $_name = [
        'allowSameNameIdentity' => 'AllowSameNameIdentity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowSameNameIdentity) {
            $res['AllowSameNameIdentity'] = $this->allowSameNameIdentity;
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
        if (isset($map['AllowSameNameIdentity'])) {
            $model->allowSameNameIdentity = $map['AllowSameNameIdentity'];
        }

        return $model;
    }
}
