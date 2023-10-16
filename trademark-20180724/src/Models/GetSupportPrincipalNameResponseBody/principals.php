<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\GetSupportPrincipalNameResponseBody;

use AlibabaCloud\Tea\Model;

class principals extends Model
{
    /**
     * @var bool
     */
    public $defaultPrincipal;

    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var int
     */
    public $principalValue;
    protected $_name = [
        'defaultPrincipal'     => 'DefaultPrincipal',
        'principalDescription' => 'PrincipalDescription',
        'principalValue'       => 'PrincipalValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPrincipal) {
            $res['DefaultPrincipal'] = $this->defaultPrincipal;
        }
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
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
        if (isset($map['DefaultPrincipal'])) {
            $model->defaultPrincipal = $map['DefaultPrincipal'];
        }
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['PrincipalValue'])) {
            $model->principalValue = $map['PrincipalValue'];
        }

        return $model;
    }
}
