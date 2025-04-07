<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody;

use AlibabaCloud\Tea\Model;

class phoneNumbers extends Model
{
    /**
     * @description The verification status.
     *
     * @example VERIFIED
     *
     * @var string
     */
    public $codeVerificationStatus;

    /**
     * @example N
     *
     * @var string
     */
    public $isOfficial;

    /**
     * @description The number of phone numbers to which messages can be sent in a day.
     *
     * @example TIER_10
     *
     * @var string
     */
    public $messagingLimitTier;

    /**
     * @description The review status of the business display name.
     *
     * @example Approval
     *
     * @var string
     */
    public $nameStatus;

    /**
     * @description The review status of the new business display name.
     *
     * @example Approval
     *
     * @var string
     */
    public $newNameStatus;

    /**
     * @description The phone number.
     *
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The quality rating of the phone number. Valid values: GREEN, YELLOW, and RED.
     *
     * @example GREEN
     *
     * @var string
     */
    public $qualityRating;

    /**
     * @description The status of the phone number.
     *
     * @example PENDING
     *
     * @var string
     */
    public $status;

    /**
     * @description The callback URL to which status reports are sent by using HTTP callbacks.
     *
     * @example https://www.alibaba.com/status
     *
     * @var string
     */
    public $statusCallbackUrl;

    /**
     * @description The status report queue.
     *
     * @example alicom-09399200-queue
     *
     * @var string
     */
    public $statusQueue;

    /**
     * @description The callback URL to which MO messages are sent by using HTTP callbacks.
     *
     * @example https://www.alibaba.com/inbound
     *
     * @var string
     */
    public $upCallbackUrl;

    /**
     * @description The mobile originated (MO) message queue.
     *
     * @example alicom-09399200-queue
     *
     * @var string
     */
    public $upQueue;

    /**
     * @description The display name of the business to which the phone number belongs.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $verifiedName;
    protected $_name = [
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return phoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
