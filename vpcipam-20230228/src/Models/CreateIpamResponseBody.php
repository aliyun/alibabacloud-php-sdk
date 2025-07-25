<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class CreateIpamResponseBody extends Model
{
    /**
     * @description The ID of the default resource discovery association.
     *
     * @example ipam-res-disco-assoc-jt5fac8twugdbbgip****
     *
     * @var string
     */
    public $defaultResourceDiscoveryAssociationId;

    /**
     * @description The ID of the default resource discovery instance.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $defaultResourceDiscoveryId;

    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The default private scope created by the system after the IPAM is created.
     *
     * @example ipam-scope-8wiontzmiy6cg0****
     *
     * @var string
     */
    public $privateDefaultScopeId;

    /**
     * @description The default public scope created by the system after the IPAM is created.
     *
     * @example ipam-scope-r5c5c7bmym1brc****
     *
     * @var string
     */
    public $publicDefaultScopeId;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED39DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of discovered resources.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDiscoveryAssociationCount;
    protected $_name = [
        'defaultResourceDiscoveryAssociationId' => 'DefaultResourceDiscoveryAssociationId',
        'defaultResourceDiscoveryId' => 'DefaultResourceDiscoveryId',
        'ipamId' => 'IpamId',
        'privateDefaultScopeId' => 'PrivateDefaultScopeId',
        'publicDefaultScopeId' => 'PublicDefaultScopeId',
        'requestId' => 'RequestId',
        'resourceDiscoveryAssociationCount' => 'ResourceDiscoveryAssociationCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultResourceDiscoveryAssociationId) {
            $res['DefaultResourceDiscoveryAssociationId'] = $this->defaultResourceDiscoveryAssociationId;
        }
        if (null !== $this->defaultResourceDiscoveryId) {
            $res['DefaultResourceDiscoveryId'] = $this->defaultResourceDiscoveryId;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->privateDefaultScopeId) {
            $res['PrivateDefaultScopeId'] = $this->privateDefaultScopeId;
        }
        if (null !== $this->publicDefaultScopeId) {
            $res['PublicDefaultScopeId'] = $this->publicDefaultScopeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDiscoveryAssociationCount) {
            $res['ResourceDiscoveryAssociationCount'] = $this->resourceDiscoveryAssociationCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultResourceDiscoveryAssociationId'])) {
            $model->defaultResourceDiscoveryAssociationId = $map['DefaultResourceDiscoveryAssociationId'];
        }
        if (isset($map['DefaultResourceDiscoveryId'])) {
            $model->defaultResourceDiscoveryId = $map['DefaultResourceDiscoveryId'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['PrivateDefaultScopeId'])) {
            $model->privateDefaultScopeId = $map['PrivateDefaultScopeId'];
        }
        if (isset($map['PublicDefaultScopeId'])) {
            $model->publicDefaultScopeId = $map['PublicDefaultScopeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDiscoveryAssociationCount'])) {
            $model->resourceDiscoveryAssociationCount = $map['ResourceDiscoveryAssociationCount'];
        }

        return $model;
    }
}
