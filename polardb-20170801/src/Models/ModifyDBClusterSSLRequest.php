<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterSSLRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the endpoint.
     *
     * >
     *
     *   This parameter is required for a PolarDB for MySQL cluster.
     *
     *   This parameter is not required for a PolarDB for Oracle or PolarDB for PostgreSQL cluster. By default, SSL encryption is enabled for all endpoints.
     *   You can call the [DescribeDBClusterSSL](https://help.aliyun.com/document_detail/153414.html) operation to view the details of the endpoint.
     *
     * @example pe-******************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The network type supported by the endpoint that is specified by **DBEndpointId**. Valid values:
     *
     *   **Public**
     *   **Private**
     *   **Inner**
     *
     * >
     *
     *   This parameter is required for a PolarDB for MySQL cluster.
     *
     *   This parameter is not required for a PolarDB for Oracle or PolarDB for PostgreSQL cluster. By default, SSL encryption is enabled for all endpoints.
     *
     * @example Public
     *
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether automatic rotation of SSL certificates is enabled.
     *
     *   **Enable**: The feature is enabled.
     *   **Disable**: The feature is disabled.
     *
     * @example Enable
     *
     * @var string
     */
    public $SSLAutoRotate;

    /**
     * @description The SSL encryption status. Valid values:
     *
     *   **Disable**: SSL encryption is disabled.
     *   **Enable**: SSL encryption is enabled.
     *   **Update**: The SSL certificate is updated.
     *
     * > After you enable SSL encryption or update the SSL certificate, you must download and configure the certificate. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/153182.html).
     * @example Enable
     *
     * @var string
     */
    public $SSLEnabled;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'DBEndpointId'         => 'DBEndpointId',
        'netType'              => 'NetType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'SSLAutoRotate'        => 'SSLAutoRotate',
        'SSLEnabled'           => 'SSLEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->SSLAutoRotate) {
            $res['SSLAutoRotate'] = $this->SSLAutoRotate;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterSSLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SSLAutoRotate'])) {
            $model->SSLAutoRotate = $map['SSLAutoRotate'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        return $model;
    }
}
