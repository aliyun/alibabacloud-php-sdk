<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class snatTableEntries extends Model
{
    /**
     * @description The ID of the NAT gateway.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5tfjp3537mi6iokl59g5c****
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @description The name of the SNAT entry.
     *
     * @example test0
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @description The EIP specified in the SNAT entry.
     *
     * @example 120.XXX.XXX.71
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The source CIDR block specified in the SNAT entry.
     *
     * @example 10.0.0.13/32
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @description The secondary EIP. Multiple EIPs are separated by commas (,).
     *
     * @example 101.XXX.XXX.7
     *
     * @var string
     */
    public $standbySnatIp;

    /**
     * @description The status of the secondary EIP. Valid values:
     *
     *   Running
     *   Stopping
     *   Stopped
     *   Starting
     *
     * @example Stopped
     *
     * @var string
     */
    public $standbyStatus;

    /**
     * @description The status of the SNAT entry. Valid values:
     *
     *   Pending: The SNAT entry is being created or modified.
     *   Available: The SNAT entry is available.
     *   Deleting: The SNAT entry is being deleted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'natGatewayId'  => 'NatGatewayId',
        'snatEntryId'   => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp'        => 'SnatIp',
        'sourceCIDR'    => 'SourceCIDR',
        'standbySnatIp' => 'StandbySnatIp',
        'standbyStatus' => 'StandbyStatus',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->standbySnatIp) {
            $res['StandbySnatIp'] = $this->standbySnatIp;
        }
        if (null !== $this->standbyStatus) {
            $res['StandbyStatus'] = $this->standbyStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['StandbySnatIp'])) {
            $model->standbySnatIp = $map['StandbySnatIp'];
        }
        if (isset($map['StandbyStatus'])) {
            $model->standbyStatus = $map['StandbyStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
