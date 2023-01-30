<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 187421794
     *
     * @var int
     */
    public $monitorGroupId;

    /**
     * @description auditing
     *
     * @example 5D7136F7-9D67-5D4D-8418-6A512CCEE3A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorGroupId' => 'MonitorGroupId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorGroupId) {
            $res['MonitorGroupId'] = $this->monitorGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorGroupId'])) {
            $model->monitorGroupId = $map['MonitorGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
