<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class loadBalancerMonitorListenData extends Model
{
    /**
     * @example 80285
     *
     * @var string
     */
    public $actConns;

    /**
     * @example 2024-01-15 16:03:00
     *
     * @var string
     */
    public $bizTime;

    /**
     * @example 37150
     *
     * @var string
     */
    public $conns;

    /**
     * @example 10
     *
     * @var string
     */
    public $dropConns;

    /**
     * @example cn-dongguan-9
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example 16322
     *
     * @var string
     */
    public $inActConns;

    /**
     * @example 67532
     *
     * @var string
     */
    public $inBytes;

    /**
     * @example 324
     *
     * @var string
     */
    public $inDropBytes;

    /**
     * @example 27
     *
     * @var string
     */
    public $inDropPkts;

    /**
     * @example 12
     *
     * @var string
     */
    public $inPkts;

    /**
     * @example 0
     *
     * @var string
     */
    public $inValidRsNum;

    /**
     * @example lb-5q73cv04zeyh43lh74lp4****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example 5155487
     *
     * @var string
     */
    public $outBytes;

    /**
     * @example 0
     *
     * @var string
     */
    public $outDropBytes;

    /**
     * @example 76
     *
     * @var string
     */
    public $outDropPkts;

    /**
     * @example 34
     *
     * @var string
     */
    public $outPkts;

    /**
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @example 80
     *
     * @var string
     */
    public $VPort;

    /**
     * @example 2
     *
     * @var string
     */
    public $validRsNum;

    /**
     * @example 10.8.*.*
     *
     * @var string
     */
    public $vip;

    /**
     * @example 53284
     *
     * @var string
     */
    public $vni;
    protected $_name = [
        'actConns'       => 'ActConns',
        'bizTime'        => 'BizTime',
        'conns'          => 'Conns',
        'dropConns'      => 'DropConns',
        'ensRegionId'    => 'EnsRegionId',
        'inActConns'     => 'InActConns',
        'inBytes'        => 'InBytes',
        'inDropBytes'    => 'InDropBytes',
        'inDropPkts'     => 'InDropPkts',
        'inPkts'         => 'InPkts',
        'inValidRsNum'   => 'InValidRsNum',
        'loadBalancerId' => 'LoadBalancerId',
        'outBytes'       => 'OutBytes',
        'outDropBytes'   => 'OutDropBytes',
        'outDropPkts'    => 'OutDropPkts',
        'outPkts'        => 'OutPkts',
        'proto'          => 'Proto',
        'VPort'          => 'VPort',
        'validRsNum'     => 'ValidRsNum',
        'vip'            => 'Vip',
        'vni'            => 'Vni',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return loadBalancerMonitorListenData
     */
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
