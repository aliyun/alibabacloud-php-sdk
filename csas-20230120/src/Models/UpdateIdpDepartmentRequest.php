<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateIdpDepartmentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10653
     *
     * @var string
     */
    public $departmentId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $departmentName;

    /**
     * @description This parameter is required.
     *
     * @example 598
     *
     * @var string
     */
    public $idpConfigId;
    protected $_name = [
        'departmentId'   => 'DepartmentId',
        'departmentName' => 'DepartmentName',
        'idpConfigId'    => 'IdpConfigId',
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
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIdpDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        return $model;
    }
}
