<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceLinkedRoleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $serviceLinkedRole;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'serviceLinkedRole' => 'ServiceLinkedRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->serviceLinkedRole) {
            $res['ServiceLinkedRole'] = $this->serviceLinkedRole;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ServiceLinkedRole'])) {
            $model->serviceLinkedRole = $map['ServiceLinkedRole'];
        }

        return $model;
    }
}
