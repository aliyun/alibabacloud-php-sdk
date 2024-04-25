<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteIdpDepartmentRequest extends Model
{
    /**
     * @example 10829
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example 507
     *
     * @var string
     */
    public $idpConfigId;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'idpConfigId'  => 'IdpConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIdpDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        return $model;
    }
}
