<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetControlPolicyEnablementStatusResponseBody extends Model
{
    /**
     * @example Disabled
     *
     * @var string
     */
    public $enablementStatus;

    /**
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
