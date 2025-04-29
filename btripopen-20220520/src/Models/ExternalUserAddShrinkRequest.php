<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ExternalUserAddShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certRequestListShrink;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'birthday' => 'birthday',
        'certRequestListShrink' => 'cert_request_list',
        'email' => 'email',
        'externalUserId' => 'external_user_id',
        'phone' => 'phone',
        'realName' => 'real_name',
        'realNameEn' => 'real_name_en',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->certRequestListShrink) {
            $res['cert_request_list'] = $this->certRequestListShrink;
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

        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
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
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }

        if (isset($map['cert_request_list'])) {
            $model->certRequestListShrink = $map['cert_request_list'];
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

        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
