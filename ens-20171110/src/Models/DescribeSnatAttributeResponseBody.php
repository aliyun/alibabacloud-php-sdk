<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponseBody\snatIps;

class DescribeSnatAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $destCIDR;

    /**
     * @var bool
     */
    public $eipAffinity;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var bool
     */
    public $ispAffinity;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $snatEntryName;

    /**
     * @var string
     */
    public $snatIp;

    /**
     * @var snatIps[]
     */
    public $snatIps;

    /**
     * @var string
     */
    public $sourceCIDR;

    /**
     * @var string
     */
    public $standbySnatIp;

    /**
     * @var string
     */
    public $standbyStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'destCIDR' => 'DestCIDR',
        'eipAffinity' => 'EipAffinity',
        'idleTimeout' => 'IdleTimeout',
        'ispAffinity' => 'IspAffinity',
        'natGatewayId' => 'NatGatewayId',
        'requestId' => 'RequestId',
        'snatEntryId' => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp' => 'SnatIp',
        'snatIps' => 'SnatIps',
        'sourceCIDR' => 'SourceCIDR',
        'standbySnatIp' => 'StandbySnatIp',
        'standbyStatus' => 'StandbyStatus',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->snatIps)) {
            Model::validateArray($this->snatIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->destCIDR) {
            $res['DestCIDR'] = $this->destCIDR;
        }

        if (null !== $this->eipAffinity) {
            $res['EipAffinity'] = $this->eipAffinity;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->ispAffinity) {
            $res['IspAffinity'] = $this->ispAffinity;
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
            if (\is_array($this->snatIps)) {
                $res['SnatIps'] = [];
                $n1 = 0;
                foreach ($this->snatIps as $item1) {
                    $res['SnatIps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DestCIDR'])) {
            $model->destCIDR = $map['DestCIDR'];
        }

        if (isset($map['EipAffinity'])) {
            $model->eipAffinity = $map['EipAffinity'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['IspAffinity'])) {
            $model->ispAffinity = $map['IspAffinity'];
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
                $n1 = 0;
                foreach ($map['SnatIps'] as $item1) {
                    $model->snatIps[$n1] = snatIps::fromMap($item1);
                    ++$n1;
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
