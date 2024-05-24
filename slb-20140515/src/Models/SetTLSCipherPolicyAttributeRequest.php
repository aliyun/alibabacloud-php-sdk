<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetTLSCipherPolicyAttributeRequest extends Model
{
    /**
     * @description The cipher suites supported by the TLS version.
     *
     * TLS 1.0 and TLS 1.1 support the following cipher suites:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA AES256-SHA
     *   DES-CBC3-SHA
     *
     * TLS 1.2 supports the following cipher suites:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA AES256-SHA
     *   DES-CBC3-SHA
     *   ECDHE-ECDSA-AES128-GCM-SHA256
     *   ECDHE-ECDSA-AES256-GCM-SHA384
     *   ECDHE-ECDSA-AES128-SHA256
     *   ECDHE-ECDSA-AES256-SHA384
     *   ECDHE-RSA-AES128-GCM-SHA256
     *   ECDHE-RSA-AES256-GCM-SHA384
     *   ECDHE-RSA-AES128-SHA256
     *   ECDHE-RSA-AES256-SHA384
     *   AES128-GCM-SHA256
     *   AES256-GCM-SHA384
     *   AES128-SHA256 AES256-SHA256
     *
     * TLS 1.3 supports the following cipher suites:
     *
     *   TLS_AES_128_GCM_SHA256
     *   TLS_AES_256_GCM_SHA384
     *   TLS_CHACHA20_POLY1305_SHA256
     *   TLS_AES_128_CCM_SHA256
     *   TLS_AES_128_CCM_8_SHA256
     *
     * This parameter is required.
     * @example DES-CBC3-SHA
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The name of the TLS policy. The name must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     *
     * This parameter is required.
     * @example tls-policy*****-test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the Server Load Balancer (SLB) instance is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the TLS policy.
     *
     * This parameter is required.
     * @example tls-bp1lp2076qx4e******bridp
     *
     * @var string
     */
    public $TLSCipherPolicyId;

    /**
     * @description The version of the TLS protocol. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**.
     *
     * This parameter is required.
     * @example TLSv1.0
     *
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'TLSCipherPolicyId'    => 'TLSCipherPolicyId',
        'TLSVersions'          => 'TLSVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->TLSCipherPolicyId) {
            $res['TLSCipherPolicyId'] = $this->TLSCipherPolicyId;
        }
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetTLSCipherPolicyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TLSCipherPolicyId'])) {
            $model->TLSCipherPolicyId = $map['TLSCipherPolicyId'];
        }
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }

        return $model;
    }
}
