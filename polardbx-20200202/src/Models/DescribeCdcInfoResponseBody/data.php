<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data\instanceTopologyList;

class data extends Model
{
    /**
     * @var int
     */
    public $binlogPersistTime;

    /**
     * @var int
     */
    public $binlogSize;

    /**
     * @var string
     */
    public $cdcNewVersion;

    /**
     * @var string
     */
    public $checkSumSwitch;

    /**
     * @var bool
     */
    public $enableCyclicReplication;

    /**
     * @var instanceTopologyList[]
     */
    public $instanceTopologyList;

    /**
     * @var int
     */
    public $serverId;

    /**
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

    public function validate()
    {
        if (\is_array($this->instanceTopologyList)) {
            Model::validateArray($this->instanceTopologyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceTopologyList)) {
                $res['InstanceTopologyList'] = [];
                $n1 = 0;
                foreach ($this->instanceTopologyList as $item1) {
                    $res['InstanceTopologyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['InstanceTopologyList'] as $item1) {
                    $model->instanceTopologyList[$n1++] = instanceTopologyList::fromMap($item1);
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
