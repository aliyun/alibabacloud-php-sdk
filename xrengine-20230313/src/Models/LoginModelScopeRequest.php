<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class LoginModelScopeRequest extends Model
{
    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $empName;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'empId'   => 'EmpId',
        'empName' => 'EmpName',
        'token'   => 'Token',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }
        if (null !== $this->empName) {
            $res['EmpName'] = $this->empName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoginModelScopeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }
        if (isset($map['EmpName'])) {
            $model->empName = $map['EmpName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
