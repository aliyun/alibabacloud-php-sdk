<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class rdsSuperInstances extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $rdsName;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'password'    => 'Password',
        'rdsName'     => 'RdsName',
        'accountName' => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->rdsName) {
            $res['RdsName'] = $this->rdsName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsSuperInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RdsName'])) {
            $model->rdsName = $map['RdsName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
