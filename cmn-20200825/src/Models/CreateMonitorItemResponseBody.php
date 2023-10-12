<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorItemResponseBody extends Model
{
    /**
     * @example m-c4k8xcdlxxc1x0p2
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @description Id of the request
     *
     * @example BC7E67AB-7653-505E-BB78-45486035E137
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorItemId' => 'MonitorItemId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
