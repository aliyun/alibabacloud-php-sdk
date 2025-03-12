<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListK8sAccessInfoResponseBody\k8sAccessInfos;
use AlibabaCloud\Tea\Model;

class ListK8sAccessInfoResponseBody extends Model
{
    /**
     * @description The information about the Kubernetes clusters.
     *
     * @var k8sAccessInfos[]
     */
    public $k8sAccessInfos;

    /**
     * @description The request ID.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sAccessInfos' => 'K8sAccessInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sAccessInfos) {
            $res['K8sAccessInfos'] = [];
            if (null !== $this->k8sAccessInfos && \is_array($this->k8sAccessInfos)) {
                $n = 0;
                foreach ($this->k8sAccessInfos as $item) {
                    $res['K8sAccessInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListK8sAccessInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sAccessInfos'])) {
            if (!empty($map['K8sAccessInfos'])) {
                $model->k8sAccessInfos = [];
                $n                     = 0;
                foreach ($map['K8sAccessInfos'] as $item) {
                    $model->k8sAccessInfos[$n++] = null !== $item ? k8sAccessInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
