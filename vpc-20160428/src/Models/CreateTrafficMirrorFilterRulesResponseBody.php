<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponseBody\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponseBody\ingressRules;
use AlibabaCloud\Tea\Model;

class CreateTrafficMirrorFilterRulesResponseBody extends Model
{
    /**
     * @var egressRules[]
     */
    public $egressRules;

    /**
     * @description The list of outbound rules.
     *
     * @var ingressRules[]
     */
    public $ingressRules;

    /**
     * @description The ID of the inbound rule.
     *
     * @example 07F272E2-6AD5-433A-8207-A607C76F1676
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'egressRules'  => 'EgressRules',
        'ingressRules' => 'IngressRules',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->egressRules) {
            $res['EgressRules'] = [];
            if (null !== $this->egressRules && \is_array($this->egressRules)) {
                $n = 0;
                foreach ($this->egressRules as $item) {
                    $res['EgressRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ingressRules) {
            $res['IngressRules'] = [];
            if (null !== $this->ingressRules && \is_array($this->ingressRules)) {
                $n = 0;
                foreach ($this->ingressRules as $item) {
                    $res['IngressRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateTrafficMirrorFilterRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EgressRules'])) {
            if (!empty($map['EgressRules'])) {
                $model->egressRules = [];
                $n                  = 0;
                foreach ($map['EgressRules'] as $item) {
                    $model->egressRules[$n++] = null !== $item ? egressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n                   = 0;
                foreach ($map['IngressRules'] as $item) {
                    $model->ingressRules[$n++] = null !== $item ? ingressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
