<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserUpdateRequest\certRequestList;
use AlibabaCloud\Tea\Model;

class ExternalUserUpdateRequest extends Model
{
    /**
     * @example 2000-01-02
     *
     * @var string
     */
    public $birthday;

    /**
     * @var certRequestList[]
     */
    public $certRequestList;

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
        'birthday'        => 'birthday',
        'certRequestList' => 'cert_request_list',
        'email'           => 'email',
        'phone'           => 'phone',
        'realName'        => 'real_name',
        'realNameEn'      => 'real_name_en',
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
        if (null !== $this->certRequestList) {
            $res['cert_request_list'] = [];
            if (null !== $this->certRequestList && \is_array($this->certRequestList)) {
                $n = 0;
                foreach ($this->certRequestList as $item) {
                    $res['cert_request_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ExternalUserUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['cert_request_list'])) {
            if (!empty($map['cert_request_list'])) {
                $model->certRequestList = [];
                $n                      = 0;
                foreach ($map['cert_request_list'] as $item) {
                    $model->certRequestList[$n++] = null !== $item ? certRequestList::fromMap($item) : $item;
                }
            }
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
