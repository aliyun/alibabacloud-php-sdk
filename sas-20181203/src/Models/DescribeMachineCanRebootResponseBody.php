<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeMachineCanRebootResponseBody extends Model
{
    /**
     * @description Indicates whether the server can be restarted. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $canReboot;

    /**
     * @description The ID of the request.
     *
     * @example 79CFF74D-E967-5407-8A78-EE03B925FDAA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canReboot' => 'CanReboot',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canReboot) {
            $res['CanReboot'] = $this->canReboot;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMachineCanRebootResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanReboot'])) {
            $model->canReboot = $map['CanReboot'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
