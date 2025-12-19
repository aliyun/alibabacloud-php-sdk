<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppAiStaff extends Model
{
    /**
     * @var string
     */
    public $staffId;

    /**
     * @var string
     */
    public $staffName;

    /**
     * @var string
     */
    public $staffType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'staffId' => 'StaffId',
        'staffName' => 'StaffName',
        'staffType' => 'StaffType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->staffId) {
            $res['StaffId'] = $this->staffId;
        }

        if (null !== $this->staffName) {
            $res['StaffName'] = $this->staffName;
        }

        if (null !== $this->staffType) {
            $res['StaffType'] = $this->staffType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['StaffId'])) {
            $model->staffId = $map['StaffId'];
        }

        if (isset($map['StaffName'])) {
            $model->staffName = $map['StaffName'];
        }

        if (isset($map['StaffType'])) {
            $model->staffType = $map['StaffType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
