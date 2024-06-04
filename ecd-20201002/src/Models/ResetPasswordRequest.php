<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class ResetPasswordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 95e41934-383e-4c9f-824f-3b93b19b****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 2f00ab32-a473-4c90-9aae-dd8842ae****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example a***@example.edu
     *
     * @var string
     */
    public $email;

    /**
     * @description This parameter is required.
     *
     * @example liming
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou+dir-899235****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1827912****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'clientId'     => 'ClientId',
        'clientToken'  => 'ClientToken',
        'email'        => 'Email',
        'endUserId'    => 'EndUserId',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'phone'        => 'phone',
    ];

    public function validate()
    {
    }

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
