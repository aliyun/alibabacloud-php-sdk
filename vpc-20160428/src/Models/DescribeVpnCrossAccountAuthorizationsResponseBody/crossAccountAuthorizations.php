<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class crossAccountAuthorizations extends Model
{
    /**
     * @example 1250123456123456
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example cen-vv8h0t3klfpaae****
     *
     * @var string
     */
    public $bindInstance;

    /**
     * @example CEN
     *
     * @var string
     */
    public $bindProduct;

    /**
     * @example 1210123456123456
     *
     * @var int
     */
    public $bindUid;

    /**
     * @example 1658201810000
     *
     * @var int
     */
    public $creationTime;

    /**
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
