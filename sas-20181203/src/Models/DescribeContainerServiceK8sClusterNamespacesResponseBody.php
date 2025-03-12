<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterNamespacesResponseBody\k8sClusterNamespaces;
use AlibabaCloud\Tea\Model;

class DescribeContainerServiceK8sClusterNamespacesResponseBody extends Model
{
    /**
     * @description The namespaces.
     *
     * @var k8sClusterNamespaces[]
     */
    public $k8sClusterNamespaces;

    /**
     * @description The request ID.
     *
     * @example 0C8487EF-50C2-54BB-8634-10F8C35D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sClusterNamespaces' => 'K8sClusterNamespaces',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterNamespaces) {
            $res['K8sClusterNamespaces'] = [];
            if (null !== $this->k8sClusterNamespaces && \is_array($this->k8sClusterNamespaces)) {
                $n = 0;
                foreach ($this->k8sClusterNamespaces as $item) {
                    $res['K8sClusterNamespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerServiceK8sClusterNamespacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterNamespaces'])) {
            if (!empty($map['K8sClusterNamespaces'])) {
                $model->k8sClusterNamespaces = [];
                $n                           = 0;
                foreach ($map['K8sClusterNamespaces'] as $item) {
                    $model->k8sClusterNamespaces[$n++] = null !== $item ? k8sClusterNamespaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
