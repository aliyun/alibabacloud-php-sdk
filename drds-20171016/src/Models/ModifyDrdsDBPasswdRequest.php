<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class ModifyDrdsDBPasswdRequest extends Model
{
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
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'newPasswd'      => 'NewPasswd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->newPasswd) {
            $res['NewPasswd'] = $this->newPasswd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDrdsDBPasswdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['NewPasswd'])) {
            $model->newPasswd = $map['NewPasswd'];
        }

        return $model;
    }
}
