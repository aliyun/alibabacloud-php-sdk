<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;

use AlibabaCloud\Tea\Model;

class ingressConfig extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @description The environment ID.
     *
     * @example env-cq146allhtgk***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The Ingress Class for listening.
     *
     * @example mse
     *
     * @var string
     */
    public $ingressClass;

    /**
     * @description Specifies whether to update the address in Ingress Status.
     *
     * @example false
     *
     * @var bool
     */
    public $overrideIngressIp;

    /**
     * @description The source ID.
     *
     * @example src-crdddallhtgtr***
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The namespace for listening.
     *
     * @example default
     *
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'clusterId' => 'clusterId',
        'environmentId' => 'environmentId',
        'ingressClass' => 'ingressClass',
        'overrideIngressIp' => 'overrideIngressIp',
        'sourceId' => 'sourceId',
        'watchNamespace' => 'watchNamespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
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

    /**
     * @param array $map
     *
     * @return ingressConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
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
