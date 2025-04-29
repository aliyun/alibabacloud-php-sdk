<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserAddRequest\certRequestList;

class ExternalUserAddRequest extends Model
{
    /**
     * @var string
     */
    public $birthday;

    /**
     * @var certRequestList[]
     */
    public $certRequestList;

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
        'certRequestList' => 'cert_request_list',
        'email' => 'email',
        'externalUserId' => 'external_user_id',
        'phone' => 'phone',
        'realName' => 'real_name',
        'realNameEn' => 'real_name_en',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        if (\is_array($this->certRequestList)) {
            Model::validateArray($this->certRequestList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->certRequestList) {
            if (\is_array($this->certRequestList)) {
                $res['cert_request_list'] = [];
                $n1 = 0;
                foreach ($this->certRequestList as $item1) {
                    $res['cert_request_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['cert_request_list'])) {
                $model->certRequestList = [];
                $n1 = 0;
                foreach ($map['cert_request_list'] as $item1) {
                    $model->certRequestList[$n1++] = certRequestList::fromMap($item1);
                }
            }
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
