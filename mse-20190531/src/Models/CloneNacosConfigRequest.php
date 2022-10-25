<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CloneNacosConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $originNamespaceId;

    /**
     * @var string
     */
    public $policy;

    /**
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
