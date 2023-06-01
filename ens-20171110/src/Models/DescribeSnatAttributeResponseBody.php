<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponseBody\snatIps;
use AlibabaCloud\Tea\Model;

class DescribeSnatAttributeResponseBody extends Model
{
    /**
     * @example 2020-04-26T15:38:27Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description Id of the request
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example snat-5tfi6f8gds82mjmlofeym****
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
     * @example 120.72.56.71
     *
     * @var string
     */
    public $snatIp;

    /**
     * @var snatIps[]
     */
    public $snatIps;

    /**
     * @example 10.0.0.0/24
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
        'creationTime'  => 'CreationTime',
        'natGatewayId'  => 'NatGatewayId',
        'requestId'     => 'RequestId',
        'snatEntryId'   => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp'        => 'SnatIp',
        'snatIps'       => 'SnatIps',
        'sourceCIDR'    => 'SourceCIDR',
        'status'        => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
