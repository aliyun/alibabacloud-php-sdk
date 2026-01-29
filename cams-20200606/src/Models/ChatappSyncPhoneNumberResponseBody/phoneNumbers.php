<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody\phoneNumbers\callingConfigure;

class phoneNumbers extends Model
{
    /**
     * @var callingConfigure
     */
    public $callingConfigure;

    /**
     * @var string
     */
    public $codeVerificationStatus;

    /**
     * @var string
     */
    public $isOfficial;

    /**
     * @var string
     */
    public $messagingLimitTier;

    /**
     * @var string
     */
    public $nameStatus;

    /**
     * @var string
     */
    public $newNameStatus;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $qualityRating;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusCallbackUrl;

    /**
     * @var string
     */
    public $statusQueue;

    /**
     * @var string
     */
    public $upCallbackUrl;

    /**
     * @var string
     */
    public $upQueue;

    /**
     * @var string
     */
    public $verifiedName;
    protected $_name = [
        'callingConfigure' => 'CallingConfigure',
        'codeVerificationStatus' => 'CodeVerificationStatus',
        'isOfficial' => 'IsOfficial',
        'messagingLimitTier' => 'MessagingLimitTier',
        'nameStatus' => 'NameStatus',
        'newNameStatus' => 'NewNameStatus',
        'phoneNumber' => 'PhoneNumber',
        'qualityRating' => 'QualityRating',
        'status' => 'Status',
        'statusCallbackUrl' => 'StatusCallbackUrl',
        'statusQueue' => 'StatusQueue',
        'upCallbackUrl' => 'UpCallbackUrl',
        'upQueue' => 'UpQueue',
        'verifiedName' => 'VerifiedName',
    ];

    public function validate()
    {
        if (null !== $this->callingConfigure) {
            $this->callingConfigure->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingConfigure) {
            $res['CallingConfigure'] = null !== $this->callingConfigure ? $this->callingConfigure->toArray($noStream) : $this->callingConfigure;
        }

        if (null !== $this->codeVerificationStatus) {
            $res['CodeVerificationStatus'] = $this->codeVerificationStatus;
        }

        if (null !== $this->isOfficial) {
            $res['IsOfficial'] = $this->isOfficial;
        }

        if (null !== $this->messagingLimitTier) {
            $res['MessagingLimitTier'] = $this->messagingLimitTier;
        }

        if (null !== $this->nameStatus) {
            $res['NameStatus'] = $this->nameStatus;
        }

        if (null !== $this->newNameStatus) {
            $res['NewNameStatus'] = $this->newNameStatus;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->qualityRating) {
            $res['QualityRating'] = $this->qualityRating;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusCallbackUrl) {
            $res['StatusCallbackUrl'] = $this->statusCallbackUrl;
        }

        if (null !== $this->statusQueue) {
            $res['StatusQueue'] = $this->statusQueue;
        }

        if (null !== $this->upCallbackUrl) {
            $res['UpCallbackUrl'] = $this->upCallbackUrl;
        }

        if (null !== $this->upQueue) {
            $res['UpQueue'] = $this->upQueue;
        }

        if (null !== $this->verifiedName) {
            $res['VerifiedName'] = $this->verifiedName;
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
        if (isset($map['CallingConfigure'])) {
            $model->callingConfigure = callingConfigure::fromMap($map['CallingConfigure']);
        }

        if (isset($map['CodeVerificationStatus'])) {
            $model->codeVerificationStatus = $map['CodeVerificationStatus'];
        }

        if (isset($map['IsOfficial'])) {
            $model->isOfficial = $map['IsOfficial'];
        }

        if (isset($map['MessagingLimitTier'])) {
            $model->messagingLimitTier = $map['MessagingLimitTier'];
        }

        if (isset($map['NameStatus'])) {
            $model->nameStatus = $map['NameStatus'];
        }

        if (isset($map['NewNameStatus'])) {
            $model->newNameStatus = $map['NewNameStatus'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['QualityRating'])) {
            $model->qualityRating = $map['QualityRating'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCallbackUrl'])) {
            $model->statusCallbackUrl = $map['StatusCallbackUrl'];
        }

        if (isset($map['StatusQueue'])) {
            $model->statusQueue = $map['StatusQueue'];
        }

        if (isset($map['UpCallbackUrl'])) {
            $model->upCallbackUrl = $map['UpCallbackUrl'];
        }

        if (isset($map['UpQueue'])) {
            $model->upQueue = $map['UpQueue'];
        }

        if (isset($map['VerifiedName'])) {
            $model->verifiedName = $map['VerifiedName'];
        }

        return $model;
    }
}
