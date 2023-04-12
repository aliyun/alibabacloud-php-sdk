<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class GetControlPolicyEnablementStatusResponseBody extends Model
{
    /**
     * @description The status of the Control Policy feature. Valid values:
     *
     *   Enabled: The feature is enabled.
     *   PendingEnable: The feature is being enabled.
     *   Disabled: The feature is disabled.
     *   PendingDisable: The feature is being disabled.
     *
     * @example Disabled
     *
     * @var string
     */
    public $enablementStatus;

    /**
     * @description The ID of the request.
     *
     * @example 1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4
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
     * @return GetControlPolicyEnablementStatusResponseBody
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
