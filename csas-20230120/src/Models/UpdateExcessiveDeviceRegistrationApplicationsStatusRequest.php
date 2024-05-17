<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateExcessiveDeviceRegistrationApplicationsStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description This parameter is required.
     *
     * @example Approved
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExcessiveDeviceRegistrationApplicationsStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
