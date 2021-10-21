<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\GetSupportPrincipalNameResponseBody;

use AlibabaCloud\Tea\Model;

class principals extends Model
{
    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var bool
     */
    public $defaultPrincipal;

    /**
     * @var int
     */
    public $principalValue;
    protected $_name = [
        'principalDescription' => 'PrincipalDescription',
        'defaultPrincipal'     => 'DefaultPrincipal',
        'principalValue'       => 'PrincipalValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->defaultPrincipal) {
            $res['DefaultPrincipal'] = $this->defaultPrincipal;
        }
        if (null !== $this->principalValue) {
            $res['PrincipalValue'] = $this->principalValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return principals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['DefaultPrincipal'])) {
            $model->defaultPrincipal = $map['DefaultPrincipal'];
        }
        if (isset($map['PrincipalValue'])) {
            $model->principalValue = $map['PrincipalValue'];
        }

        return $model;
    }
}
