<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class EnterpriseDingtalkGroupMember extends Model
{
    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example true
     *
     * @var bool
     */
    public $isAdmin;

    /**
     * @description 代表资源组的资源属性字段
     *
     * @example 130xxxxxxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 张三
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
