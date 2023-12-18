<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class EnableControlPolicyResponseBody extends Model
{
    /**
     * @description The status of the Control Policy feature. Valid values:
     *
     *   Enabled: The feature is enabled.
     *   PendingEnable: The feature is being enabled.
     *   Disabled: The feature is disabled.
     *   PendingDisable: The feature is being disabled.
     *
     * @example PendingEnable
     *
     * @var string
     */
    public $enablementStatus;

    /**
     * @description The ID of the request.
     *
     * @example 8CE7BD95-EFFA-4911-A1E0-BD4412697FEB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enablementStatus' => 'EnablementStatus',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablementStatus) {
            $res['EnablementStatus'] = $this->enablementStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablementStatus'])) {
            $model->enablementStatus = $map['EnablementStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
