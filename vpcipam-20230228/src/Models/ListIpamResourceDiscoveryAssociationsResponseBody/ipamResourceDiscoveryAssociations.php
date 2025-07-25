<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class ipamResourceDiscoveryAssociations extends Model
{
    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The ID of resource discovery instance.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource discovery belongs.
     *
     * @example 1210123456******
     *
     * @var string
     */
    public $ipamResourceDiscoveryOwnerId;

    /**
     * @description The status of the resource discovery instance. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Deleting**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $ipamResourceDiscoveryStatus;

    /**
     * @description The type of resource discovery. Valid values:
     *
     *   **system**: default resource discovery created by the system.
     *   **custom**: custom resource discovery created by users.
     *
     * @example custom
     *
     * @var string
     */
    public $ipamResourceDiscoveryType;

    /**
     * @description The status of the associations. Valid values:
     *
     *   **Created**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ipamId' => 'IpamId',
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'ipamResourceDiscoveryOwnerId' => 'IpamResourceDiscoveryOwnerId',
        'ipamResourceDiscoveryStatus' => 'IpamResourceDiscoveryStatus',
        'ipamResourceDiscoveryType' => 'IpamResourceDiscoveryType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
        }
        if (null !== $this->ipamResourceDiscoveryOwnerId) {
            $res['IpamResourceDiscoveryOwnerId'] = $this->ipamResourceDiscoveryOwnerId;
        }
        if (null !== $this->ipamResourceDiscoveryStatus) {
            $res['IpamResourceDiscoveryStatus'] = $this->ipamResourceDiscoveryStatus;
        }
        if (null !== $this->ipamResourceDiscoveryType) {
            $res['IpamResourceDiscoveryType'] = $this->ipamResourceDiscoveryType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamResourceDiscoveryAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
        }
        if (isset($map['IpamResourceDiscoveryOwnerId'])) {
            $model->ipamResourceDiscoveryOwnerId = $map['IpamResourceDiscoveryOwnerId'];
        }
        if (isset($map['IpamResourceDiscoveryStatus'])) {
            $model->ipamResourceDiscoveryStatus = $map['IpamResourceDiscoveryStatus'];
        }
        if (isset($map['IpamResourceDiscoveryType'])) {
            $model->ipamResourceDiscoveryType = $map['IpamResourceDiscoveryType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
