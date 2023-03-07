<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserStatusRequest extends Model
{
    /**
     * @description The type of the business. Valid values: FREEZE: the frozen business of the account. TRUSTEESHIP: the hosted business of the account.
     *
     * @example FREEZE
     *
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The account status that you want to set. Valid values: Freeze: The account is frozen. Thaw: The account is unfrozen. Trusteeship: The account is hosted. TrusteeshipCancel: The account is not hosted.
     *
     * @example Freeze
     *
     * @var string
     */
    public $status;

    /**
     * @description 停机模式
     * 1：立即停机
     * @example 0
     *
     * @var string
     */
    public $stopMode;
    protected $_name = [
        'businessType' => 'BusinessType',
        'ownerId'      => 'OwnerId',
        'status'       => 'Status',
        'stopMode'     => 'StopMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopMode) {
            $res['StopMode'] = $this->stopMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopMode'])) {
            $model->stopMode = $map['StopMode'];
        }

        return $model;
    }
}
