<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class CreateIpamResponseBody extends Model
{
    /**
     * @var string
     */
    public $defaultResourceDiscoveryAssociationId;
    /**
     * @var string
     */
    public $defaultResourceDiscoveryId;
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string
     */
    public $privateDefaultScopeId;
    /**
     * @var string
     */
    public $publicDefaultScopeId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $resourceDiscoveryAssociationCount;
    protected $_name = [
        'defaultResourceDiscoveryAssociationId' => 'DefaultResourceDiscoveryAssociationId',
        'defaultResourceDiscoveryId'            => 'DefaultResourceDiscoveryId',
        'ipamId'                                => 'IpamId',
        'privateDefaultScopeId'                 => 'PrivateDefaultScopeId',
        'publicDefaultScopeId'                  => 'PublicDefaultScopeId',
        'requestId'                             => 'RequestId',
        'resourceDiscoveryAssociationCount'     => 'ResourceDiscoveryAssociationCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
