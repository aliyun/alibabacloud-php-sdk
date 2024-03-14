<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models;

use AlibabaCloud\Tea\Model;

class CheckVerificationRequest extends Model
{
    /**
     * @description The verification code.
     *
     * @example 1234
     *
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The service ID that is displayed in the Phone Number Verification Service console.
     *
     * @example FA00000000000001
     *
     * @var string
     */
    public $serviceSid;

    /**
     * @description The mobile phone number of the recipient. You must add the country code to the beginning of the mobile phone number. Example: 6212345\*\*\*\*01.
     *
     * @example 6212345****01
     *
     * @var string
     */
    public $to;

    /**
     * @description The unique authentication ID that is returned by calling the StartVerification operation.
     *
     * @example rJXlaR2q5LpKfREtpRPMBfDVQvELZwmBbK5yVR7gr3nLbNAcolLGPYCJaVHt/i+I
     *
     * @var string
     */
    public $verificationId;
    protected $_name = [
        'code'                 => 'Code',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'serviceSid'           => 'ServiceSid',
        'to'                   => 'To',
        'verificationId'       => 'VerificationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serviceSid) {
            $res['ServiceSid'] = $this->serviceSid;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->verificationId) {
            $res['VerificationId'] = $this->verificationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServiceSid'])) {
            $model->serviceSid = $map['ServiceSid'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['VerificationId'])) {
            $model->verificationId = $map['VerificationId'];
        }

        return $model;
    }
}
