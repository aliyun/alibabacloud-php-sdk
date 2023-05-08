<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class RevokeKubeconfigResponseBody extends Model
{
    /**
     * @description The new kubeconfig file generated.
     *
     * @example apiVersion: v1 clusters: - cluster:     server: https://121.**.**.**:6443     certificate-authority-data: *****   name: kubernetes contexts: - context:     cluster: kubernetes     user: "*****"   name: ***** current-context: ***** kind: Config preferences: {} users: - name: "*****"   user:     client-certificate-data: *****     client-key-data: *****
     *
     * @var string
     */
    public $kubeconfig;

    /**
     * @description The ID of the request.
     *
     * @example 7CF71C8B-79DD-150F-929E-267C51C5E311
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kubeconfig' => 'Kubeconfig',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kubeconfig) {
            $res['Kubeconfig'] = $this->kubeconfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeKubeconfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kubeconfig'])) {
            $model->kubeconfig = $map['Kubeconfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
