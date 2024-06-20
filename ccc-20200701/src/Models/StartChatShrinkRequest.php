<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class StartChatShrinkRequest extends Model
{
    /**
     * @example cf584733-***-***-9699-cb77aa3b7aa6
     *
     * @var string
     */
    public $accessChannelId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9XYGTGWtq2wFi_Bpg7aUnIoYi_vG_rO3bjEn0YtsxbHRHrYHlz1LDBLJAyZcLxieRQR4h_6AnWvTjJeNU5jg************Hwej7WgWrmA=
     *
     * @var string
     */
    public $token;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userListShrink;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'instanceId'      => 'InstanceId',
        'token'           => 'Token',
        'userListShrink'  => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->userListShrink) {
            $res['UserList'] = $this->userListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartChatShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UserList'])) {
            $model->userListShrink = $map['UserList'];
        }

        return $model;
    }
}
