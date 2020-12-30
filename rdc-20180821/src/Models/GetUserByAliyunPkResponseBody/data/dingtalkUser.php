<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetUserByAliyunPkResponseBody\data;

use AlibabaCloud\Tea\Model;

class dingtalkUser extends Model
{
    /**
     * @var int
     */
    public $dingtalkUserId;

    /**
     * @var string
     */
    public $dingId;

    /**
     * @var string
     */
    public $unionId;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $codeUserName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'dingtalkUserId' => 'DingtalkUserId',
        'dingId'         => 'DingId',
        'unionId'        => 'UnionId',
        'nick'           => 'Nick',
        'codeUserName'   => 'CodeUserName',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingtalkUserId) {
            $res['DingtalkUserId'] = $this->dingtalkUserId;
        }
        if (null !== $this->dingId) {
            $res['DingId'] = $this->dingId;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->codeUserName) {
            $res['CodeUserName'] = $this->codeUserName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingtalkUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingtalkUserId'])) {
            $model->dingtalkUserId = $map['DingtalkUserId'];
        }
        if (isset($map['DingId'])) {
            $model->dingId = $map['DingId'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['CodeUserName'])) {
            $model->codeUserName = $map['CodeUserName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
