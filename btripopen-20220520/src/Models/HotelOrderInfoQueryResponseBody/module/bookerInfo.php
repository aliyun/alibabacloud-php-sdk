<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\bookerInfo\department;

class bookerInfo extends Model
{
    /**
     * @var string
     */
    public $bookerRole;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var department
     */
    public $department;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var bool
     */
    public $needApply;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bookerRole' => 'booker_role',
        'contactEmail' => 'contact_email',
        'contactPhone' => 'contact_phone',
        'corpId' => 'corp_id',
        'department' => 'department',
        'enName' => 'en_name',
        'jobNo' => 'job_no',
        'needApply' => 'need_apply',
        'realName' => 'real_name',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (null !== $this->department) {
            $this->department->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['department'] = null !== $this->department ? $this->department->toArray($noStream) : $this->department;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
