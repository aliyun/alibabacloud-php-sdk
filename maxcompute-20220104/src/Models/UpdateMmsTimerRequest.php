<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class UpdateMmsTimerRequest extends Model
{
    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var bool
     */
    public $stopped;

    /**
     * @var string[]
     */
    public $tableBlackList;

    /**
     * @var string[]
     */
    public $tableWhiteList;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'scheduleType' => 'scheduleType',
        'stopped' => 'stopped',
        'tableBlackList' => 'tableBlackList',
        'tableWhiteList' => 'tableWhiteList',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->tableBlackList)) {
            Model::validateArray($this->tableBlackList);
        }
        if (\is_array($this->tableWhiteList)) {
            Model::validateArray($this->tableWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
        }

        if (null !== $this->tableBlackList) {
            if (\is_array($this->tableBlackList)) {
                $res['tableBlackList'] = [];
                $n1 = 0;
                foreach ($this->tableBlackList as $item1) {
                    $res['tableBlackList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableWhiteList) {
            if (\is_array($this->tableWhiteList)) {
                $res['tableWhiteList'] = [];
                $n1 = 0;
                foreach ($this->tableWhiteList as $item1) {
                    $res['tableWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }

        if (isset($map['tableBlackList'])) {
            if (!empty($map['tableBlackList'])) {
                $model->tableBlackList = [];
                $n1 = 0;
                foreach ($map['tableBlackList'] as $item1) {
                    $model->tableBlackList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tableWhiteList'])) {
            if (!empty($map['tableWhiteList'])) {
                $model->tableWhiteList = [];
                $n1 = 0;
                foreach ($map['tableWhiteList'] as $item1) {
                    $model->tableWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
