<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class ResetPasswordRequest extends Model
{
    /**
     * @description The client ID. The system generates a unique ID for each client.
     *
     * This parameter is required.
     *
     * @example 95e41934-383e-4c9f-824f-3b93b19b****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 2f00ab32-a473-4c90-9aae-dd8842ae****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The email address of the user.
     *
     * @example a***@example.edu
     *
     * @var string
     */
    public $email;

    /**
     * @description The user ID.
     *
     * This parameter is required.
     *
     * @example liming
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The office network ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+dir-899235****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The phone number of the user.
     *
     * @example 1827912****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientToken' => 'ClientToken',
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'phone' => 'phone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
