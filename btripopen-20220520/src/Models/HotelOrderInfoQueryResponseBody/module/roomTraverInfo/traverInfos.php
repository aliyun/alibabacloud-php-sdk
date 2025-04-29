<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\applyInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\department;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\tripCostCenter;

class traverInfos extends Model
{
    /**
     * @var applyInfo
     */
    public $applyInfo;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var int
     */
    public $certType;

    /**
     * @var department
     */
    public $department;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $travelerId;

    /**
     * @var string
     */
    public $travelerName;

    /**
     * @var int
     */
    public $travelerType;

    /**
     * @var tripCostCenter
     */
    public $tripCostCenter;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'applyInfo' => 'apply_info',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'department' => 'department',
        'jobNo' => 'job_no',
        'telephone' => 'telephone',
        'travelerId' => 'traveler_id',
        'travelerName' => 'traveler_name',
        'travelerType' => 'traveler_type',
        'tripCostCenter' => 'trip_cost_center',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        if (null !== $this->applyInfo) {
            $this->applyInfo->validate();
        }
        if (null !== $this->department) {
            $this->department->validate();
        }
        if (null !== $this->tripCostCenter) {
            $this->tripCostCenter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyInfo) {
            $res['apply_info'] = null !== $this->applyInfo ? $this->applyInfo->toArray($noStream) : $this->applyInfo;
        }

        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }

        if (null !== $this->department) {
            $res['department'] = null !== $this->department ? $this->department->toArray($noStream) : $this->department;
        }

        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }

        if (null !== $this->telephone) {
            $res['telephone'] = $this->telephone;
        }

        if (null !== $this->travelerId) {
            $res['traveler_id'] = $this->travelerId;
        }

        if (null !== $this->travelerName) {
            $res['traveler_name'] = $this->travelerName;
        }

        if (null !== $this->travelerType) {
            $res['traveler_type'] = $this->travelerType;
        }

        if (null !== $this->tripCostCenter) {
            $res['trip_cost_center'] = null !== $this->tripCostCenter ? $this->tripCostCenter->toArray($noStream) : $this->tripCostCenter;
        }

        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
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
        if (isset($map['apply_info'])) {
            $model->applyInfo = applyInfo::fromMap($map['apply_info']);
        }

        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['department'])) {
            $model->department = department::fromMap($map['department']);
        }

        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }

        if (isset($map['telephone'])) {
            $model->telephone = $map['telephone'];
        }

        if (isset($map['traveler_id'])) {
            $model->travelerId = $map['traveler_id'];
        }

        if (isset($map['traveler_name'])) {
            $model->travelerName = $map['traveler_name'];
        }

        if (isset($map['traveler_type'])) {
            $model->travelerType = $map['traveler_type'];
        }

        if (isset($map['trip_cost_center'])) {
            $model->tripCostCenter = tripCostCenter::fromMap($map['trip_cost_center']);
        }

        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
