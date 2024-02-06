<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnatTableEntriesRequest extends Model
{
    /**
     * @description The ID of the Network Address Translation (NAT) gateway.
     *
     * @example nat-5tawjw5j7sgd2deujxuk0****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The page number. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The maximum value is **100**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5tfjp36fsrb36zs36faj0****
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
     * @description The elastic IP address (EIP) specified in the SNAT entry.
     *
     * @example 58.XXXX.XXX.29
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The source CIDR block specified in the SNAT entry.
     *
     * @example 10.1.0.50/32
     *
     * @var string
     */
    public $sourceCIDR;
    protected $_name = [
        'natGatewayId'  => 'NatGatewayId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'snatEntryId'   => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp'        => 'SnatIp',
        'sourceCIDR'    => 'SourceCIDR',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatTableEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
