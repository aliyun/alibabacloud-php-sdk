<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsResponseBody;

use AlibabaCloud\Tea\Model;

class principals extends Model
{
    /**
     * @description The ID of the RAM entity.
     *
     * @example 24477111603637****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The type of the RAM entity. Valid values:
     *
     *   RamUser: a RAM user
     *   RamRole: a RAM role
     *
     * @example RamUser
     *
     * @var string
     */
    public $principalType;
    protected $_name = [
        'principalId'   => 'PrincipalId',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
