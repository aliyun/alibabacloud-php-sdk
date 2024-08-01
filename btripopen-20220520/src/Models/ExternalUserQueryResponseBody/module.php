<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserQueryResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2000-01-02
     *
     * @var string
     */
    public $birthday;

    /**
     * @example btrip123456
     *
     * @var string
     */
    public $corpId;

    /**
     * @example zhangsan@alibaba-inc.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 000001
     *
     * @var string
     */
    public $externalUserId;

    /**
     * @example 13438009765
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realName;

    /**
     * @example zhang/san
     *
     * @var string
     */
    public $realNameEn;

    /**
     * @example e1$12345678
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'birthday'       => 'birthday',
        'corpId'         => 'corp_id',
        'email'          => 'email',
        'externalUserId' => 'external_user_id',
        'phone'          => 'phone',
        'realName'       => 'real_name',
        'realNameEn'     => 'real_name_en',
        'userId'         => 'user_id',
        'userNick'       => 'user_nick',
        'userType'       => 'user_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->externalUserId) {
            $res['external_user_id'] = $this->externalUserId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['external_user_id'])) {
            $model->externalUserId = $map['external_user_id'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_nick'])) {
            $model->userNick = $map['user_nick'];
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
