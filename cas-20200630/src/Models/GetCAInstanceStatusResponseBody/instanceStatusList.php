<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatusList extends Model
{
    /**
     * @description The expiration date of the private CA certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * >  This parameter is returned only when the value of the **Status** parameter is **USED** or **REVOKE**. The value USED indicates that the private CA instance is enabled, and the value REVOKE indicates that the instance is revoked.
     * @example 1792944000000
     *
     * @var int
     */
    public $afterTime;

    /**
     * @description The issuance date of the private CA certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * >  This parameter is returned only when the value of the **Status** parameter is **USED** or **REVOKE**. The value USED indicates that the private CA instance is enabled, and the value REVOKE indicates that the instance is revoked.
     * @example 1635177600000
     *
     * @var int
     */
    public $beforeTime;

    /**
     * @description The number of certificates that are issued by using the private CA instance.
     *
     * @example 1
     *
     * @var int
     */
    public $certIssuedCount;

    /**
     * @description The number of certificates that can be issued by using the private CA instance.
     *
     * For a private root CA instance whose **Type** is **ROOT**, this parameter indicates the number of intermediate CA certificates that can be issued. For a private intermediate CA instance whose **Type** is **SUB_ROOT**, this parameter indicates the total number of client certificates and server certificates that can be issued
     * @example 10
     *
     * @var int
     */
    public $certTotalCount;

    /**
     * @description The unique identifier of the private CA certificate.
     *
     * >  This parameter is returned only when the value of the **Status** parameter is **USED** or **REVOKE**. The value USED indicates that the private CA instance is enabled, and the value REVOKE indicates that the instance is revoked.
     * @example a7bb2dd212a2112128cd5cc9b753****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the private CA instance.
     *
     * @example cas-member-0hmi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the private CA instance. Valid values:
     *
     *   **BUY**: The private CA instance is purchased but is not enabled.
     *   **USED**: The private CA instance is enabled.
     *   **REFUND**: The payment of the private CA instance is refunded.
     *   **REVOKE**: The private CA instance is revoked.
     *
     * @example USED
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the private CA instance. Valid values:
     *
     *   **ROOT**: root CA instance
     *   **SUB_ROOT**: intermediate CA instance
     *
     * @example ROOT
     *
     * @var string
     */
    public $type;

    /**
     * @description The expiration date of the private CA instance. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * >  This parameter corresponds to the duration that you select when you purchase the private CA instance. The duration indicates the subscription period of the Private Certificate Authority (PCA) service.
     * @example 1637251200000
     *
     * @var int
     */
    public $useExpireTime;
    protected $_name = [
        'afterTime'       => 'AfterTime',
        'beforeTime'      => 'BeforeTime',
        'certIssuedCount' => 'CertIssuedCount',
        'certTotalCount'  => 'CertTotalCount',
        'identifier'      => 'Identifier',
        'instanceId'      => 'InstanceId',
        'status'          => 'Status',
        'type'            => 'Type',
        'useExpireTime'   => 'UseExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->certIssuedCount) {
            $res['CertIssuedCount'] = $this->certIssuedCount;
        }
        if (null !== $this->certTotalCount) {
            $res['CertTotalCount'] = $this->certTotalCount;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useExpireTime) {
            $res['UseExpireTime'] = $this->useExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['CertIssuedCount'])) {
            $model->certIssuedCount = $map['CertIssuedCount'];
        }
        if (isset($map['CertTotalCount'])) {
            $model->certTotalCount = $map['CertTotalCount'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseExpireTime'])) {
            $model->useExpireTime = $map['UseExpireTime'];
        }

        return $model;
    }
}
