<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeMachineCanRebootResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canReboot;

    /**
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
