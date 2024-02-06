<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponseBody\snatIps;
use AlibabaCloud\Tea\Model;

class DescribeSnatAttributeResponseBody extends Model
{
    /**
     * @description The time when the entry was created. The time is displayed in UTC.
     *
     * @example 2020-04-26T15:38:27Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The destination CIDR block. The rule takes effect only on requests that access the destination CIDR block.
     *
     * @example 101.10. XX.XX/24
     *
     * @var string
     */
    public $destCIDR;

    /**
     * @description Timeout period.
     *
     * @example 10
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The ID of the Network Address Translation (NAT) gateway.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5tfi6f8gds82mjmlofeym****
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
     * @description The EIP specified in the SNAT entry. Multiple EIPs are separated by commas (,).
     *
     * @example 120.72.XX.XX
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The information about the EIP specified in the SNAT entry.
     *
     * @var snatIps[]
     */
    public $snatIps;

    /**
     * @description The source CIDR block specified in the SNAT entry.
     *
     * @example 10.0.XX.XX/24
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @description The secondary EIP specified in the SNAT entry. Multiple secondary EIPs are separated by commas (,).
     *
     * @example 101.23. XX.XX
     *
     * @var string
     */
    public $standbySnatIp;

    /**
     * @description The status of the secondary EIP.
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
     * @description The status of the SNAT entry.
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

    /**
     * @description The type of the NAT. Valid values:
     *
     * - FullCone: full cone NAT.
     * @example FullCone
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'destCIDR'      => 'DestCIDR',
        'idleTimeout'   => 'IdleTimeout',
        'natGatewayId'  => 'NatGatewayId',
        'requestId'     => 'RequestId',
        'snatEntryId'   => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp'        => 'SnatIp',
        'snatIps'       => 'SnatIps',
        'sourceCIDR'    => 'SourceCIDR',
        'standbySnatIp' => 'StandbySnatIp',
        'standbyStatus' => 'StandbyStatus',
        'status'        => 'Status',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->destCIDR) {
            $res['DestCIDR'] = $this->destCIDR;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->snatIps) {
            $res['SnatIps'] = [];
            if (null !== $this->snatIps && \is_array($this->snatIps)) {
                $n = 0;
                foreach ($this->snatIps as $item) {
                    $res['SnatIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DestCIDR'])) {
            $model->destCIDR = $map['DestCIDR'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['SnatIps'])) {
            if (!empty($map['SnatIps'])) {
                $model->snatIps = [];
                $n              = 0;
                foreach ($map['SnatIps'] as $item) {
                    $model->snatIps[$n++] = null !== $item ? snatIps::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
