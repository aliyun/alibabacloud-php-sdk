<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class rdsSuperInstances extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $rdsName;
    protected $_name = [
        'accountName' => 'AccountName',
        'password'    => 'Password',
        'rdsName'     => 'RdsName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->rdsName) {
            $res['RdsName'] = $this->rdsName;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RdsName'])) {
            $model->rdsName = $map['RdsName'];
        }

        return $model;
    }
}
