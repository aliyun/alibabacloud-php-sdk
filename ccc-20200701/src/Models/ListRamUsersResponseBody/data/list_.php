<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRamUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 15772400000****
     *
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @example false
     *
     * @var bool
     */
    public $primary;

    /**
     * @example 28036411123456****
     *
     * @var string
     */
    public $ramId;
    protected $_name = [
        'aliyunUid'   => 'AliyunUid',
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'loginName'   => 'LoginName',
        'mobile'      => 'Mobile',
        'primary'     => 'Primary',
        'ramId'       => 'RamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        return $model;
    }
}
