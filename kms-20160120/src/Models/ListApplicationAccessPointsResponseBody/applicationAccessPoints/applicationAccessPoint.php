<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody\applicationAccessPoints;

use AlibabaCloud\Dara\Model;

class applicationAccessPoint extends Model
{
    /**
     * @var string
     */
    public $authenticationMethod;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'authenticationMethod' => 'AuthenticationMethod',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationMethod) {
            $res['AuthenticationMethod'] = $this->authenticationMethod;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AuthenticationMethod'])) {
            $model->authenticationMethod = $map['AuthenticationMethod'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
