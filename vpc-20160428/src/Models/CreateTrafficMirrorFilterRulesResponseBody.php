<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponseBody\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesResponseBody\ingressRules;

class CreateTrafficMirrorFilterRulesResponseBody extends Model
{
    /**
     * @var egressRules[]
     */
    public $egressRules;
    /**
     * @var ingressRules[]
     */
    public $ingressRules;
    /**
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
        if (\is_array($this->egressRules)) {
            Model::validateArray($this->egressRules);
        }
        if (\is_array($this->ingressRules)) {
            Model::validateArray($this->ingressRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressRules) {
            if (\is_array($this->egressRules)) {
                $res['EgressRules'] = [];
                $n1                 = 0;
                foreach ($this->egressRules as $item1) {
                    $res['EgressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ingressRules) {
            if (\is_array($this->ingressRules)) {
                $res['IngressRules'] = [];
                $n1                  = 0;
                foreach ($this->ingressRules as $item1) {
                    $res['IngressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EgressRules'])) {
            if (!empty($map['EgressRules'])) {
                $model->egressRules = [];
                $n1                 = 0;
                foreach ($map['EgressRules'] as $item1) {
                    $model->egressRules[$n1++] = egressRules::fromMap($item1);
                }
            }
        }

        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n1                  = 0;
                foreach ($map['IngressRules'] as $item1) {
                    $model->ingressRules[$n1++] = ingressRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
