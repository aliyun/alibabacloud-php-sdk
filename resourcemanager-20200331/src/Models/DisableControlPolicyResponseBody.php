<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DisableControlPolicyResponseBody extends Model
{
    /**
     * @description The status of the Control Policy feature. Valid values:
     *
     *   Enabled: The Control Policy feature is enabled.
     *   PendingEnable: The Control Policy feature is being enabled.
     *   Disabled: The Control Policy feature is disabled.
     *   PendingDisable: The Control Policy feature is being disabled.
     *
     * @example PendingDisable
     *
     * @var string
     */
    public $enablementStatus;

    /**
     * @description The ID of the request.
     *
     * @example 7C709979-451D-4C92-835D-7DDCCAA562E9
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
     * @return DisableControlPolicyResponseBody
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
