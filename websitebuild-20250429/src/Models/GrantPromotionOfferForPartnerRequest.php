<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GrantPromotionOfferForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $belongId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $employeeCode;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'activityId' => 'ActivityId',
        'belongId' => 'BelongId',
        'channel' => 'Channel',
        'employeeCode' => 'EmployeeCode',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->belongId) {
            $res['BelongId'] = $this->belongId;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->employeeCode) {
            $res['EmployeeCode'] = $this->employeeCode;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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

        if (isset($map['BelongId'])) {
            $model->belongId = $map['BelongId'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['EmployeeCode'])) {
            $model->employeeCode = $map['EmployeeCode'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
