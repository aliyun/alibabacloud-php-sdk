<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Attached Resource ID
     *
     * @example op-csbkd9llhtgqhqua***
     *
     * @var string
     */
    public $attachResourceId;

    /**
     * @description Attached resource type, HttpApi, GatewayRoute, Operation, GatewayService, GatewayServicePort, Gateway, Domain
     *
     * @example Operation
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @description Policy attachment configuration
     *
     * @example {"unitNum":1,"timeUnit":"s","enable":true}
     *
     * @var string
     */
    public $config;

    /**
     * @description Environment ID
     *
     * @example env-cq7l5s5lhtgi6qa***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Gateway Instance ID
     *
     * @example gw-cq2vundlhtg***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Policy Attachment ID
     *
     * @example pr-cqoojualhtgquuj***
     *
     * @var string
     */
    public $policyAttachmentId;

    /**
     * @description Policy ID
     *
     * @example p-cq7l5s5bblhtgi6qas***
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'config' => 'config',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'policyAttachmentId' => 'policyAttachmentId',
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
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->policyAttachmentId) {
            $res['policyAttachmentId'] = $this->policyAttachmentId;
        }
        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['policyAttachmentId'])) {
            $model->policyAttachmentId = $map['policyAttachmentId'];
        }
        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}
