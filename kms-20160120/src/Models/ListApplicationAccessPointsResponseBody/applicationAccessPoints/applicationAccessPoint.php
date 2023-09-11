<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody\applicationAccessPoints;

use AlibabaCloud\Tea\Model;

class applicationAccessPoint extends Model
{
    /**
     * @example ClientKey
     *
     * @var string
     */
    public $authenticationMethod;

    /**
     * @example aap_test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'authenticationMethod' => 'AuthenticationMethod',
        'name'                 => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return applicationAccessPoint
     */
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
