<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ExternalUserUpdateShrinkRequest extends Model
{
    /**
     * @example 2000-01-02
     *
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certRequestListShrink;

    /**
     * @example zhangsan@alibaba-inc.com
     *
     * @var string
     */
    public $email;

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
    protected $_name = [
        'birthday'              => 'birthday',
        'certRequestListShrink' => 'cert_request_list',
        'email'                 => 'email',
        'phone'                 => 'phone',
        'realName'              => 'real_name',
        'realNameEn'            => 'real_name_en',
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
        if (null !== $this->certRequestListShrink) {
            $res['cert_request_list'] = $this->certRequestListShrink;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExternalUserUpdateShrinkRequest
     */
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
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }

        return $model;
    }
}
