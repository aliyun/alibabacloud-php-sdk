<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;

use AlibabaCloud\Dara\Model;

class ingressConfig extends Model
{
    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var bool
     */
    public $overrideIngressIp;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'environmentId' => 'environmentId',
        'ingressClass' => 'ingressClass',
        'overrideIngressIp' => 'overrideIngressIp',
        'sourceId' => 'sourceId',
        'watchNamespace' => 'watchNamespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->ingressClass) {
            $res['ingressClass'] = $this->ingressClass;
        }

        if (null !== $this->overrideIngressIp) {
            $res['overrideIngressIp'] = $this->overrideIngressIp;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->watchNamespace) {
            $res['watchNamespace'] = $this->watchNamespace;
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
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['ingressClass'])) {
            $model->ingressClass = $map['ingressClass'];
        }

        if (isset($map['overrideIngressIp'])) {
            $model->overrideIngressIp = $map['overrideIngressIp'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['watchNamespace'])) {
            $model->watchNamespace = $map['watchNamespace'];
        }

        return $model;
    }
}
