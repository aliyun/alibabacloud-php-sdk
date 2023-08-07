<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody;

use AlibabaCloud\Tea\Model;

class associateVpcs extends Model
{
    /**
     * @description The status of the VPC that is associated with the DHCP options set. Valid values:
     *
     *   **InUse**: in use
     *   **Pending**: being configured
     *
     * @example InUse
     *
     * @var string
     */
    public $associateStatus;

    /**
     * @description The ID of the VPC that is associated with the DHCP options set.
     *
     * @example vpc-eb3b54r6otues4tjj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associateStatus' => 'AssociateStatus',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateStatus) {
            $res['AssociateStatus'] = $this->associateStatus;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associateVpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateStatus'])) {
            $model->associateStatus = $map['AssociateStatus'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
