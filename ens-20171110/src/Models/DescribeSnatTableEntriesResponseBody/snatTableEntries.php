<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class snatTableEntries extends Model
{
    /**
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example snat-5tfjp3537mi6iokl59g5c****
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @example test0
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @example 120.XXX.XXX.71
     *
     * @var string
     */
    public $snatIp;

    /**
     * @example 10.0.0.13/32
     *
     * @var string
     */
    public $sourceCIDR;

    /**
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
