<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyAttachmentRequest extends Model
{
    /**
     * @description Attached resource ID
     *
     * This parameter is required.
     *
     * @example api-cu07jj6m1hkokaus***
     *
     * @var string
     */
    public $attachResourceId;

    /**
     * @description Attached resource type, such as HttpApi, GatewayRoute, Operation, GatewayService, GatewayServicePort, Gateway, Domain
     *
     * This parameter is required.
     *
     * @example HttpApi
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @description Environment ID
     *
     * This parameter is required.
     *
     * @example env-cquqsollhtgid***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Gateway instance ID
     *
     * This parameter is required.
     *
     * @example gw-cq7l5s5lhtgi6qas***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Policy ID
     *
     * This parameter is required.
     *
     * @example p-cq787etlhtghrptjg***
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'policyId' => 'policyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachResourceId) {
            $res['attachResourceId'] = $this->attachResourceId;
        }
        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachResourceId'])) {
            $model->attachResourceId = $map['attachResourceId'];
        }
        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}
