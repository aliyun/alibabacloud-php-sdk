<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class crossAccountAuthorizations extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the IPsec-VPN connection belongs.
     *
     * @example 1250123456123456
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-vv8h0t3klfpaae****
     *
     * @var string
     */
    public $bindInstance;

    /**
     * @description The resource type of the authorization.
     *
     * The value is set to **CEN**, which indicates that the IPsec-VPN connection can be associated with a transit router of a Cloud Enterprise Network (CEN) instance that belongs to another Alibaba Cloud account.
     * @example CEN
     *
     * @var string
     */
    public $bindProduct;

    /**
     * @description The ID of the Alibaba Cloud account whose resource the IPsec-VPN connection can be associated with.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $bindUid;

    /**
     * @description The timestamp when the authorization for the IPsec-VPN connection was created.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1658201810000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'bindInstance'    => 'BindInstance',
        'bindProduct'     => 'BindProduct',
        'bindUid'         => 'BindUid',
        'creationTime'    => 'CreationTime',
        'vpnConnectionId' => 'VpnConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bindInstance) {
            $res['BindInstance'] = $this->bindInstance;
        }
        if (null !== $this->bindProduct) {
            $res['BindProduct'] = $this->bindProduct;
        }
        if (null !== $this->bindUid) {
            $res['BindUid'] = $this->bindUid;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return crossAccountAuthorizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BindInstance'])) {
            $model->bindInstance = $map['BindInstance'];
        }
        if (isset($map['BindProduct'])) {
            $model->bindProduct = $map['BindProduct'];
        }
        if (isset($map['BindUid'])) {
            $model->bindUid = $map['BindUid'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
