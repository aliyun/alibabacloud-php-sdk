<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeCrTemplatesRequest extends Model
{
    /**
     * @description The Istio version used in ASM.
     *
     * @example v1.9.7.31-g24cdcb43-aliyun
     *
     * @var string
     */
    public $istioVersion;

    /**
     * @description The type of Istio resource whose common YAML templates you want to query. Valid values:
     *
     *   AuthorizationPolicy
     *   RequestAuthentication
     *   PeerAuthentication
     *   WorkloadGroup
     *   WorkloadEntry
     *   Sidecar
     *   EnvoyFilter
     *   ServiceEntry
     *   Gateway
     *   DestinationRule
     *   VirtualService
     *
     * @example VirtualService
     *
     * @var string
     */
    public $kind;
    protected $_name = [
        'istioVersion' => 'IstioVersion',
        'kind'         => 'Kind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        return $model;
    }
}
