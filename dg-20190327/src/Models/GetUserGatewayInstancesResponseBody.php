<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class GetUserGatewayInstancesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example [{\"connectEndpointType\":\"INTERNET\",\"currentDaemonVersion\":\"3.0\",\"currentVersion\":\"3.0\",\"endPoint\":\"pub-cn-hangzhou.dg.aliyuncs.com\",\"gatewayId\":\"dg-7i09bl******\",\"gatewayInstanceId\":\"dg-node-IjtchHPSucZ******\",\"gatewayInstanceStatus\":\"STOPPED\",\"lastUpdateTime\":\"16124920*****\",\"localIP\":\"172.XX.XX.49\",\"message\":\"\",\"outputIP\":\"172.XX.XX.49\"}]
     *
     * @var string
     */
    public $data;

    /**
     * @example SYSTEM_ERR
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 4171E7B3-ED84-5882-90ED-924A08EDD414
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errorMsg'  => 'ErrorMsg',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserGatewayInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
