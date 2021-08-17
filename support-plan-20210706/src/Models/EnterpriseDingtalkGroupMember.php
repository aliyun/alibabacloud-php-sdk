<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class EnterpriseDingtalkGroupMember extends Model
{
    /**
     * @description 是否企业钉群管理员
     *
     * @var bool
     */
    public $isAdmin;

    /**
     * @description 成员手机号
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 成员姓名
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'isAdmin' => 'IsAdmin',
        'mobile'  => 'Mobile',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnterpriseDingtalkGroupMember
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
