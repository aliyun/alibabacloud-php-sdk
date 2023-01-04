<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHubClusterKubeconfigResponseBody extends Model
{
    /**
     * @description The content of the kubeconfig file of the master instance.
     *
     * @example "\napiVersion: v1\nclusters:\n- cluster:\n server: https://172.16.11.***:6443\n certificate-authority-data: LS0tLS1CRU=...\n name: kubernetes\ncontexts:\n- context:\n cluster: kubernetes\n user: \"kubernetes-a****\"\n name: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c****\ncurrent-context: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c9****\nkind: Config\npreferences: {}\nusers:\n- name: \"kubernetes-admin\"\n user:\n client-certificate-data: LS0tLS1CRU...\n client-key-data: LS0tCg==...\n"
     *
     * @var string
     */
    public $kubeconfig;

    /**
     * @description The ID of the request.
     *
     * @example 5BE4C329-DCC2-5B61-8F66-112B7D7FC712
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
     * @return DescribeHubClusterKubeconfigResponseBody
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
