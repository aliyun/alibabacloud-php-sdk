<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColumnarInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColumnarInfoResponseBody\data\instanceTopologyList;

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
    public $checkSumSwitch;

    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $columnarNewVersion;

    /**
     * @var string
     */
    public $columnarVersion;

    /**
     * @var instanceTopologyList[]
     */
    public $instanceTopologyList;

    /**
     * @var int
     */
    public $serverId;
    protected $_name = [
        'binlogPersistTime' => 'BinlogPersistTime',
        'binlogSize' => 'BinlogSize',
        'checkSumSwitch' => 'CheckSumSwitch',
        'classCode' => 'ClassCode',
        'columnarNewVersion' => 'ColumnarNewVersion',
        'columnarVersion' => 'ColumnarVersion',
        'instanceTopologyList' => 'InstanceTopologyList',
        'serverId' => 'ServerId',
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

        if (null !== $this->checkSumSwitch) {
            $res['CheckSumSwitch'] = $this->checkSumSwitch;
        }

        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->columnarNewVersion) {
            $res['ColumnarNewVersion'] = $this->columnarNewVersion;
        }

        if (null !== $this->columnarVersion) {
            $res['ColumnarVersion'] = $this->columnarVersion;
        }

        if (null !== $this->instanceTopologyList) {
            if (\is_array($this->instanceTopologyList)) {
                $res['InstanceTopologyList'] = [];
                $n1 = 0;
                foreach ($this->instanceTopologyList as $item1) {
                    $res['InstanceTopologyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
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

        if (isset($map['CheckSumSwitch'])) {
            $model->checkSumSwitch = $map['CheckSumSwitch'];
        }

        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['ColumnarNewVersion'])) {
            $model->columnarNewVersion = $map['ColumnarNewVersion'];
        }

        if (isset($map['ColumnarVersion'])) {
            $model->columnarVersion = $map['ColumnarVersion'];
        }

        if (isset($map['InstanceTopologyList'])) {
            if (!empty($map['InstanceTopologyList'])) {
                $model->instanceTopologyList = [];
                $n1 = 0;
                foreach ($map['InstanceTopologyList'] as $item1) {
                    $model->instanceTopologyList[$n1] = instanceTopologyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
