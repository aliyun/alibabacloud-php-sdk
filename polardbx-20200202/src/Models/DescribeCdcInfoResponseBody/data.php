<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data\instanceTopologyList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 15
     *
     * @var int
     */
    public $binlogPersistTime;

    /**
     * @description This parameter is required.
     *
     * @example 524288000
     *
     * @var int
     */
    public $binlogSize;

    /**
     * @description This parameter is required.
     *
     * @example polarx-cdc-kernel-***
     *
     * @var string
     */
    public $cdcNewVersion;

    /**
     * @example ON
     *
     * @var string
     */
    public $checkSumSwitch;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCyclicReplication;

    /**
     * @var instanceTopologyList[]
     */
    public $instanceTopologyList;

    /**
     * @description server id
     *
     * This parameter is required.
     *
     * @example 3014767486
     *
     * @var int
     */
    public $serverId;

    /**
     * @example true
     *
     * @var bool
     */
    public $versionSupportMultiCdc;
    protected $_name = [
        'binlogPersistTime' => 'BinlogPersistTime',
        'binlogSize' => 'BinlogSize',
        'cdcNewVersion' => 'CdcNewVersion',
        'checkSumSwitch' => 'CheckSumSwitch',
        'enableCyclicReplication' => 'EnableCyclicReplication',
        'instanceTopologyList' => 'InstanceTopologyList',
        'serverId' => 'ServerId',
        'versionSupportMultiCdc' => 'VersionSupportMultiCdc',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->binlogPersistTime) {
            $res['BinlogPersistTime'] = $this->binlogPersistTime;
        }
        if (null !== $this->binlogSize) {
            $res['BinlogSize'] = $this->binlogSize;
        }
        if (null !== $this->cdcNewVersion) {
            $res['CdcNewVersion'] = $this->cdcNewVersion;
        }
        if (null !== $this->checkSumSwitch) {
            $res['CheckSumSwitch'] = $this->checkSumSwitch;
        }
        if (null !== $this->enableCyclicReplication) {
            $res['EnableCyclicReplication'] = $this->enableCyclicReplication;
        }
        if (null !== $this->instanceTopologyList) {
            $res['InstanceTopologyList'] = [];
            if (null !== $this->instanceTopologyList && \is_array($this->instanceTopologyList)) {
                $n = 0;
                foreach ($this->instanceTopologyList as $item) {
                    $res['InstanceTopologyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->versionSupportMultiCdc) {
            $res['VersionSupportMultiCdc'] = $this->versionSupportMultiCdc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinlogPersistTime'])) {
            $model->binlogPersistTime = $map['BinlogPersistTime'];
        }
        if (isset($map['BinlogSize'])) {
            $model->binlogSize = $map['BinlogSize'];
        }
        if (isset($map['CdcNewVersion'])) {
            $model->cdcNewVersion = $map['CdcNewVersion'];
        }
        if (isset($map['CheckSumSwitch'])) {
            $model->checkSumSwitch = $map['CheckSumSwitch'];
        }
        if (isset($map['EnableCyclicReplication'])) {
            $model->enableCyclicReplication = $map['EnableCyclicReplication'];
        }
        if (isset($map['InstanceTopologyList'])) {
            if (!empty($map['InstanceTopologyList'])) {
                $model->instanceTopologyList = [];
                $n = 0;
                foreach ($map['InstanceTopologyList'] as $item) {
                    $model->instanceTopologyList[$n++] = null !== $item ? instanceTopologyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['VersionSupportMultiCdc'])) {
            $model->versionSupportMultiCdc = $map['VersionSupportMultiCdc'];
        }

        return $model;
    }
}
