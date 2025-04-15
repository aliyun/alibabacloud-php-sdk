<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponseBody\data;

use AlibabaCloud\Dara\Model;

class namespaces extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $addressServerHost;

    /**
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @var string
     */
    public $namespaceDescription;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'addressServerHost' => 'AddressServerHost',
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceDescription' => 'NamespaceDescription',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'regionId' => 'RegionId',
        'secretKey' => 'SecretKey',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
