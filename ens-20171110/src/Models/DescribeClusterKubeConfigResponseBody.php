<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterKubeConfigResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c8f0377146d104687ac562eef9403****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster certificate.
     *
     * @example apiVersion: v1
     * - cluster:
     * certificate-authority-data:***
     * server: https://****:6443
     * cluster: kubernetes
     * user: "2580306074811*****"
     * name: 258*******
     * users:
     * - name: "2580306074811*****"
     * user:
     * client-certificate-data:***
     * client-key-data: ***
     * @var string
     */
    public $kubeconfig;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'kubeconfig' => 'Kubeconfig',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
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
     * @return DescribeClusterKubeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Kubeconfig'])) {
            $model->kubeconfig = $map['Kubeconfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
