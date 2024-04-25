<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateIdpDepartmentRequest extends Model
{
    /**
     * @var string
     */
    public $departmentName;

    /**
     * @example 1222
     *
     * @var string
     */
    public $idpConfigId;
    protected $_name = [
        'departmentName' => 'DepartmentName',
        'idpConfigId'    => 'IdpConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateIdpDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        return $model;
    }
}
