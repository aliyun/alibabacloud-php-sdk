<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppResponseBody\resultObj;

use AlibabaCloud\Tea\Model;

class scanUser extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $aliyunUidType;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'aliyunUid'     => 'AliyunUid',
        'aliyunUidType' => 'AliyunUidType',
        'delete'        => 'Delete',
        'email'         => 'Email',
        'ext'           => 'Ext',
        'id'            => 'Id',
        'name'          => 'Name',
        'parentUid'     => 'ParentUid',
        'phone'         => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->aliyunUidType) {
            $res['AliyunUidType'] = $this->aliyunUidType;
        }
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scanUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['AliyunUidType'])) {
            $model->aliyunUidType = $map['AliyunUidType'];
        }
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
