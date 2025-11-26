<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class loadBalancerMonitorListenData extends Model
{
    /**
     * @var string
     */
    public $actConns;

    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $conns;

    /**
     * @var string
     */
    public $dropConns;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $inActConns;

    /**
     * @var string
     */
    public $inBytes;

    /**
     * @var string
     */
    public $inDropBytes;

    /**
     * @var string
     */
    public $inDropPkts;

    /**
     * @var string
     */
    public $inPkts;

    /**
     * @var string
     */
    public $inValidRsNum;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $outBytes;

    /**
     * @var string
     */
    public $outDropBytes;

    /**
     * @var string
     */
    public $outDropPkts;

    /**
     * @var string
     */
    public $outPkts;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $VPort;

    /**
     * @var string
     */
    public $validRsNum;

    /**
     * @var string
     */
    public $vip;

    /**
     * @var string
     */
    public $vni;
    protected $_name = [
        'actConns' => 'ActConns',
        'bizTime' => 'BizTime',
        'conns' => 'Conns',
        'dropConns' => 'DropConns',
        'ensRegionId' => 'EnsRegionId',
        'inActConns' => 'InActConns',
        'inBytes' => 'InBytes',
        'inDropBytes' => 'InDropBytes',
        'inDropPkts' => 'InDropPkts',
        'inPkts' => 'InPkts',
        'inValidRsNum' => 'InValidRsNum',
        'loadBalancerId' => 'LoadBalancerId',
        'outBytes' => 'OutBytes',
        'outDropBytes' => 'OutDropBytes',
        'outDropPkts' => 'OutDropPkts',
        'outPkts' => 'OutPkts',
        'proto' => 'Proto',
        'VPort' => 'VPort',
        'validRsNum' => 'ValidRsNum',
        'vip' => 'Vip',
        'vni' => 'Vni',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }

        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }

        if (null !== $this->conns) {
            $res['Conns'] = $this->conns;
        }

        if (null !== $this->dropConns) {
            $res['DropConns'] = $this->dropConns;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->inActConns) {
            $res['InActConns'] = $this->inActConns;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->inDropBytes) {
            $res['InDropBytes'] = $this->inDropBytes;
        }

        if (null !== $this->inDropPkts) {
            $res['InDropPkts'] = $this->inDropPkts;
        }

        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
        }

        if (null !== $this->inValidRsNum) {
            $res['InValidRsNum'] = $this->inValidRsNum;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->outDropBytes) {
            $res['OutDropBytes'] = $this->outDropBytes;
        }

        if (null !== $this->outDropPkts) {
            $res['OutDropPkts'] = $this->outDropPkts;
        }

        if (null !== $this->outPkts) {
            $res['OutPkts'] = $this->outPkts;
        }

        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }

        if (null !== $this->VPort) {
            $res['VPort'] = $this->VPort;
        }

        if (null !== $this->validRsNum) {
            $res['ValidRsNum'] = $this->validRsNum;
        }

        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }

        if (null !== $this->vni) {
            $res['Vni'] = $this->vni;
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
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }

        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }

        if (isset($map['Conns'])) {
            $model->conns = $map['Conns'];
        }

        if (isset($map['DropConns'])) {
            $model->dropConns = $map['DropConns'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InActConns'])) {
            $model->inActConns = $map['InActConns'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['InDropBytes'])) {
            $model->inDropBytes = $map['InDropBytes'];
        }

        if (isset($map['InDropPkts'])) {
            $model->inDropPkts = $map['InDropPkts'];
        }

        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }

        if (isset($map['InValidRsNum'])) {
            $model->inValidRsNum = $map['InValidRsNum'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['OutDropBytes'])) {
            $model->outDropBytes = $map['OutDropBytes'];
        }

        if (isset($map['OutDropPkts'])) {
            $model->outDropPkts = $map['OutDropPkts'];
        }

        if (isset($map['OutPkts'])) {
            $model->outPkts = $map['OutPkts'];
        }

        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }

        if (isset($map['VPort'])) {
            $model->VPort = $map['VPort'];
        }

        if (isset($map['ValidRsNum'])) {
            $model->validRsNum = $map['ValidRsNum'];
        }

        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        if (isset($map['Vni'])) {
            $model->vni = $map['Vni'];
        }

        return $model;
    }
}
