<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateClassRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 课堂唯一标识。
     *
     * @var string
     */
    public $classId;

    /**
     * @description 课堂标题，1~32个字符。
     *
     * @var string
     */
    public $title;

    /**
     * @description 创建人用户ID，仅支持中英文数字，下划线，中划线，1~36个字符。
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description 创建人用户昵称，1~32个字符。
     *
     * @var string
     */
    public $createNickname;
    protected $_name = [
        'appId'          => 'AppId',
        'classId'        => 'ClassId',
        'title'          => 'Title',
        'createUserId'   => 'CreateUserId',
        'createNickname' => 'CreateNickname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createNickname) {
            $res['CreateNickname'] = $this->createNickname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateNickname'])) {
            $model->createNickname = $map['CreateNickname'];
        }

        return $model;
    }
}
