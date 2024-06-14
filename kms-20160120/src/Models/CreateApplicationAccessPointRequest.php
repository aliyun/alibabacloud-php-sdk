<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationAccessPointRequest extends Model
{
    /**
     * @description The authentication method. Currently, only ClientKey is supported.
     *
     * @example ClientKey
     *
     * @var string
     */
    public $authenticationMethod;

    /**
     * @description The description of the AAP.
     *
     * @example aap description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the AAP.
     *
     * This parameter is required.
     * @example aap_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The permission policy.
     *
     * This parameter is required.
     * @example ["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]
     *
     * @var string
     */
    public $policies;
    protected $_name = [
        'authenticationMethod' => 'AuthenticationMethod',
        'description'          => 'Description',
        'name'                 => 'Name',
        'policies'             => 'Policies',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationMethod'])) {
            $model->authenticationMethod = $map['AuthenticationMethod'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }

        return $model;
    }
}
