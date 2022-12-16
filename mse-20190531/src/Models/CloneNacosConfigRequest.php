<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CloneNacosConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The IDs of configurations.
     *
     * @example 253661,253662
     *
     * @var string
     */
    public $ids;

    /**
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-i7m25igg403
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the source namespace.
     *
     * @example be821963-6d48-4ea5-9910-6057d****
     *
     * @var string
     */
    public $originNamespaceId;

    /**
     * @description The policy used to handle write conflicts.
     *
     * @example overwrite
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the destination namespace.
     *
     * @example 08be4b5d-2d1c-4e6e-aa85-83b9****
     *
     * @var string
     */
    public $targetNamespaceId;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
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
