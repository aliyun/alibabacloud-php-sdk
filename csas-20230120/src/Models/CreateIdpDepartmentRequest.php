<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateIdpDepartmentRequest extends Model
{
    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var string
     */
    public $idpConfigId;
    protected $_name = [
        'departmentName' => 'DepartmentName',
        'idpConfigId' => 'IdpConfigId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
