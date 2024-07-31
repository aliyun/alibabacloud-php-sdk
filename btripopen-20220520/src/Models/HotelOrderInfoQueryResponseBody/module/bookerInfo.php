<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\bookerInfo\department;
use AlibabaCloud\Tea\Model;

class bookerInfo extends Model
{
    /**
     * @example UN_APPLY
     *
     * @var string
     */
    public $bookerRole;

    /**
     * @example 13311112222@qq.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @example 13311112222
     *
     * @var string
     */
    public $contactPhone;

    /**
     * @example open12gddn2kn1i47v10wRJNkMFx00
     *
     * @var string
     */
    public $corpId;

    /**
     * @var department
     */
    public $department;

    /**
     * @example Tom
     *
     * @var string
     */
    public $enName;

    /**
     * @example 1001
     *
     * @var string
     */
    public $jobNo;

    /**
     * @example true
     *
     * @var bool
     */
    public $needApply;

    /**
     * @var string
     */
    public $realName;

    /**
     * @example 1430378
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bookerRole'   => 'booker_role',
        'contactEmail' => 'contact_email',
        'contactPhone' => 'contact_phone',
        'corpId'       => 'corp_id',
        'department'   => 'department',
        'enName'       => 'en_name',
        'jobNo'        => 'job_no',
        'needApply'    => 'need_apply',
        'realName'     => 'real_name',
        'userId'       => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookerRole) {
            $res['booker_role'] = $this->bookerRole;
        }
        if (null !== $this->contactEmail) {
            $res['contact_email'] = $this->contactEmail;
        }
        if (null !== $this->contactPhone) {
            $res['contact_phone'] = $this->contactPhone;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->department) {
            $res['department'] = null !== $this->department ? $this->department->toMap() : null;
        }
        if (null !== $this->enName) {
            $res['en_name'] = $this->enName;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->needApply) {
            $res['need_apply'] = $this->needApply;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bookerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['booker_role'])) {
            $model->bookerRole = $map['booker_role'];
        }
        if (isset($map['contact_email'])) {
            $model->contactEmail = $map['contact_email'];
        }
        if (isset($map['contact_phone'])) {
            $model->contactPhone = $map['contact_phone'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['department'])) {
            $model->department = department::fromMap($map['department']);
        }
        if (isset($map['en_name'])) {
            $model->enName = $map['en_name'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['need_apply'])) {
            $model->needApply = $map['need_apply'];
        }
        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
