<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterDiagnosisRequest extends Model
{
    /**
     * @description The parameter used to specify the diagnostic object. Examples of parameters for different types of diagnostic objects:
     *
     * node:
     *
     * {"name": "cn-shanghai.10.10.10.107"}
     *
     * pod
     *
     * {"namespace": "kube-system", "name": "csi-plugin-2cg9f"}
     *
     * network
     *
     * {"src": "10.10.10.108", "dst": "10.11.247.16", "dport": "80"}
     *
     * ingress
     *
     * {"url": "https://example.com"}
     *
     * memory
     *
     * {"node":"cn-hangzhou.172.16.9.240"}
     *
     * service
     *
     * {"namespace": "kube-system", "name": "nginx-ingress-lb"}
     *
     * @example {"namespace": "kube-system", "name": "csi-plugin-2cg9f"}
     *
     * @var mixed[]
     */
    public $target;

    /**
     * @description The type of the diagnostic.
     *
     * Valid values:
     *
     *   node
     *   ingress
     *   cluster
     *   memory
     *   pod
     *   service
     *   network
     *
     * @example node
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'target' => 'target',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
