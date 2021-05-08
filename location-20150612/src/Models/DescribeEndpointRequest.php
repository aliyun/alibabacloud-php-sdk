<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\Tea\Model;

class DescribeEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'id'          => 'Id',
        'serviceCode' => 'ServiceCode',
        'password'    => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
