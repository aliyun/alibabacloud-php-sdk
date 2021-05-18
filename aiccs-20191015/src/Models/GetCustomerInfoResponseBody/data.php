<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCustomerInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 昵称
     *
     * @var string
     */
    public $nick;

    /**
     * @description 头像
     *
     * @var string
     */
    public $photo;

    /**
     * @description 会员ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description 真实姓名
     *
     * @var string
     */
    public $realName;

    /**
     * @description 外部ID
     *
     * @var string
     */
    public $outerId;

    /**
     * @description 自定义字段
     *
     * @var mixed[]
     */
    public $customizeFields;
    protected $_name = [
        'nick'            => 'Nick',
        'photo'           => 'Photo',
        'userId'          => 'UserId',
        'realName'        => 'RealName',
        'outerId'         => 'OuterId',
        'customizeFields' => 'CustomizeFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->photo) {
            $res['Photo'] = $this->photo;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }
        if (null !== $this->customizeFields) {
            $res['CustomizeFields'] = $this->customizeFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Photo'])) {
            $model->photo = $map['Photo'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }
        if (isset($map['CustomizeFields'])) {
            $model->customizeFields = $map['CustomizeFields'];
        }

        return $model;
    }
}
