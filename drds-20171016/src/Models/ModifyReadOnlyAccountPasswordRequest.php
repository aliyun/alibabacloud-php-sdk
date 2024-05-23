<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class ModifyReadOnlyAccountPasswordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accountName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dbName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $newPasswd;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $originPassword;
    protected $_name = [
        'accountName'    => 'AccountName',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'newPasswd'      => 'NewPasswd',
        'originPassword' => 'OriginPassword',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->newPasswd) {
            $res['NewPasswd'] = $this->newPasswd;
        }
        if (null !== $this->originPassword) {
            $res['OriginPassword'] = $this->originPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReadOnlyAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['NewPasswd'])) {
            $model->newPasswd = $map['NewPasswd'];
        }
        if (isset($map['OriginPassword'])) {
            $model->originPassword = $map['OriginPassword'];
        }

        return $model;
    }
}
