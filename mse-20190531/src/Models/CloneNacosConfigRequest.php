<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CloneNacosConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $dataIds;

    /**
     * @description The data structure.
     *
     * @example 253661,253662
     *
     * @deprecated
     *
     * @var string
     */
    public $ids;

    /**
     * @description The ID of the destination namespace.
     *
     * This parameter is required.
     * @example mse_prepaid_public_cn-i7m25igg403
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The policy used when a write conflict occurs.
     *
     *   ABORT
     *   SKIP
     *   OVERWRITE
     *
     * @example be821963-6d48-4ea5-9910-6057d****
     *
     * @var string
     */
    public $originNamespaceId;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * This parameter is required.
     * @example OVERWRITE
     *
     * @var string
     */
    public $policy;

    /**
     * @description The IDs of configurations.
     *
     * @example 08be4b5d-2d1c-4e6e-aa85-83b9****
     *
     * @var string
     */
    public $targetNamespaceId;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'dataIds'           => 'DataIds',
        'ids'               => 'Ids',
        'instanceId'        => 'InstanceId',
        'originNamespaceId' => 'OriginNamespaceId',
        'policy'            => 'Policy',
        'targetNamespaceId' => 'TargetNamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->dataIds) {
            $res['DataIds'] = $this->dataIds;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->originNamespaceId) {
            $res['OriginNamespaceId'] = $this->originNamespaceId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->targetNamespaceId) {
            $res['TargetNamespaceId'] = $this->targetNamespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DataIds'])) {
            $model->dataIds = $map['DataIds'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OriginNamespaceId'])) {
            $model->originNamespaceId = $map['OriginNamespaceId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['TargetNamespaceId'])) {
            $model->targetNamespaceId = $map['TargetNamespaceId'];
        }

        return $model;
    }
}
