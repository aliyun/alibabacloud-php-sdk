<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class BindAccountRequest extends Model
{
    /**
     * @description The standard account of the cluster.
     *
     * @example test_accout
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-wz99d9nh532****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the RAM user.
     *
     * @example 1444832459****
     *
     * @var string
     */
    public $ramUser;
    protected $_name = [
        'accountName' => 'AccountName',
        'DBClusterId' => 'DBClusterId',
        'ramUser'     => 'RamUser',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->ramUser) {
            $res['RamUser'] = $this->ramUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RamUser'])) {
            $model->ramUser = $map['RamUser'];
        }

        return $model;
    }
}
