<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\VerifyActivityAdmissionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $admissionDate;

    /**
     * @var string[]
     */
    public $allowedDates;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string[]
     */
    public $customerLabels;

    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $maskedIdCardNo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $registrationStatus;

    /**
     * @var bool
     */
    public $signedIn;

    /**
     * @var string
     */
    public $signinTime;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'activityId' => 'ActivityId',
        'activityName' => 'ActivityName',
        'address' => 'Address',
        'admissionDate' => 'AdmissionDate',
        'allowedDates' => 'AllowedDates',
        'channelName' => 'ChannelName',
        'customerLabels' => 'CustomerLabels',
        'decision' => 'Decision',
        'endTime' => 'EndTime',
        'maskedIdCardNo' => 'MaskedIdCardNo',
        'name' => 'Name',
        'registrationStatus' => 'RegistrationStatus',
        'signedIn' => 'SignedIn',
        'signinTime' => 'SigninTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->allowedDates)) {
            Model::validateArray($this->allowedDates);
        }
        if (\is_array($this->customerLabels)) {
            Model::validateArray($this->customerLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->admissionDate) {
            $res['AdmissionDate'] = $this->admissionDate;
        }

        if (null !== $this->allowedDates) {
            if (\is_array($this->allowedDates)) {
                $res['AllowedDates'] = [];
                $n1 = 0;
                foreach ($this->allowedDates as $item1) {
                    $res['AllowedDates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->customerLabels) {
            if (\is_array($this->customerLabels)) {
                $res['CustomerLabels'] = [];
                $n1 = 0;
                foreach ($this->customerLabels as $item1) {
                    $res['CustomerLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->decision) {
            $res['Decision'] = $this->decision;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->maskedIdCardNo) {
            $res['MaskedIdCardNo'] = $this->maskedIdCardNo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->registrationStatus) {
            $res['RegistrationStatus'] = $this->registrationStatus;
        }

        if (null !== $this->signedIn) {
            $res['SignedIn'] = $this->signedIn;
        }

        if (null !== $this->signinTime) {
            $res['SigninTime'] = $this->signinTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AdmissionDate'])) {
            $model->admissionDate = $map['AdmissionDate'];
        }

        if (isset($map['AllowedDates'])) {
            if (!empty($map['AllowedDates'])) {
                $model->allowedDates = [];
                $n1 = 0;
                foreach ($map['AllowedDates'] as $item1) {
                    $model->allowedDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['CustomerLabels'])) {
            if (!empty($map['CustomerLabels'])) {
                $model->customerLabels = [];
                $n1 = 0;
                foreach ($map['CustomerLabels'] as $item1) {
                    $model->customerLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Decision'])) {
            $model->decision = $map['Decision'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MaskedIdCardNo'])) {
            $model->maskedIdCardNo = $map['MaskedIdCardNo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegistrationStatus'])) {
            $model->registrationStatus = $map['RegistrationStatus'];
        }

        if (isset($map['SignedIn'])) {
            $model->signedIn = $map['SignedIn'];
        }

        if (isset($map['SigninTime'])) {
            $model->signinTime = $map['SigninTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
