<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody\databases;

use AlibabaCloud\Dara\Model;

class permissionDetail extends Model
{
    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $permType;
    protected $_name = [
        'dsType' => 'DsType',
        'expireDate' => 'ExpireDate',
        'message' => 'Message',
        'permType' => 'PermType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
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
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }

        return $model;
    }
}
