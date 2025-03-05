<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsResponseBody;

use AlibabaCloud\Dara\Model;

class ipamResourceDiscoveryAssociations extends Model
{
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string
     */
    public $ipamResourceDiscoveryId;
    /**
     * @var string
     */
    public $ipamResourceDiscoveryOwnerId;
    /**
     * @var string
     */
    public $ipamResourceDiscoveryStatus;
    /**
     * @var string
     */
    public $ipamResourceDiscoveryType;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ipamId'                       => 'IpamId',
        'ipamResourceDiscoveryId'      => 'IpamResourceDiscoveryId',
        'ipamResourceDiscoveryOwnerId' => 'IpamResourceDiscoveryOwnerId',
        'ipamResourceDiscoveryStatus'  => 'IpamResourceDiscoveryStatus',
        'ipamResourceDiscoveryType'    => 'IpamResourceDiscoveryType',
        'status'                       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
