<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ResultCallbackRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c5ea0db8-****-****-9081-04bc0df4c6a3
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $handleReason;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'handleReason'  => 'HandleReason',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->handleReason) {
            $res['HandleReason'] = $this->handleReason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['HandleReason'])) {
            $model->handleReason = $map['HandleReason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
