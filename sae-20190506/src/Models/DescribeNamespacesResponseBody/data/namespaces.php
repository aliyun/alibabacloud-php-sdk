<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponseBody\data;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @description The ACM-specific AccessKey ID. It can be used to manage data in an Application Configuration Management (ACM) namespace. For more information, see [Differences between Alibaba Cloud AccessKey and ACM-specific AccessKey](~~~~).
     *
     * @example b34dbe3315c64f9f99b58ea447ec****
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example addr-bj-internal.edas.aliyun.com
     *
     * @var string
     */
    public $addressServerHost;

    /**
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The description of the namespace.
     *
     * @example desc
     *
     * @var string
     */
    public $namespaceDescription;

    /**
     * @description The ID of the namespace. The information of the default namespace cannot be queried or modified. The default namespace cannot be deleted.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example name
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ACM-specific AccessKey secret. It can be used to manage data in an ACM namespace. For more information, see [Differences between Alibaba Cloud AccessKey and ACM-specific AccessKey](~~~~).
     *
     * @example G/w6sseK7+nb3S6HBmANDBMD****
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The ID of the tenant.
     *
     * @example 838cad95-973f-48fe-830b-2a8546d7****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accessKey'            => 'AccessKey',
        'addressServerHost'    => 'AddressServerHost',
        'nameSpaceShortId'     => 'NameSpaceShortId',
        'namespaceDescription' => 'NamespaceDescription',
        'namespaceId'          => 'NamespaceId',
        'namespaceName'        => 'NamespaceName',
        'regionId'             => 'RegionId',
        'secretKey'            => 'SecretKey',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->addressServerHost) {
            $res['AddressServerHost'] = $this->addressServerHost;
        }
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }
        if (null !== $this->namespaceDescription) {
            $res['NamespaceDescription'] = $this->namespaceDescription;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AddressServerHost'])) {
            $model->addressServerHost = $map['AddressServerHost'];
        }
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }
        if (isset($map['NamespaceDescription'])) {
            $model->namespaceDescription = $map['NamespaceDescription'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
