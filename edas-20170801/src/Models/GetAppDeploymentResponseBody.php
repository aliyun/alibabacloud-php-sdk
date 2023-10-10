<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetAppDeploymentResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about the Deployment of the application. The value is a JSON string.
     *
     * @example {"metadata":{"name":"oambuild-group*","namespace":"default","selfLink":"/apis/apps/v1/namespaces/default/deployments/oambuil*","uid":"*-afc0-436e-9949-fb01994a9b63","resourceVersion":"969614832","generation":2,"creationTimestamp":"2021-04-06T11:38:46Z","labels":{"edas-domain":"edas-admin","edas.aliyun.oam.com/rollout-name":"oambuild-group-1","edas.aliyun.oam.com/rollout-namespace":"default","edas.aliyun.oam.com/rollout-revision":"3","edas.appid":"fc5e0f54-*-4cab-91a0-b7becb1f6174","edas.controlplane":"edas-oam","edas.oam.acname":"oambuild"...
     *
     * @var string
     */
    public $data;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 03FD1520-0FD6-436A-****-265318D7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppDeploymentResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
