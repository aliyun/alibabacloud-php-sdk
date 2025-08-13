<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSelectItemResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string[]
     */
    public $monitorStatusList;

    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'monitorStatusList' => 'monitorStatusList',
        'taskIdList' => 'taskIdList',
    ];

    public function validate()
    {
        if (\is_array($this->monitorStatusList)) {
            Model::validateArray($this->monitorStatusList);
        }
        if (\is_array($this->taskIdList)) {
            Model::validateArray($this->taskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorStatusList) {
            if (\is_array($this->monitorStatusList)) {
                $res['monitorStatusList'] = [];
                $n1 = 0;
                foreach ($this->monitorStatusList as $item1) {
                    $res['monitorStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskIdList) {
            if (\is_array($this->taskIdList)) {
                $res['taskIdList'] = [];
                $n1 = 0;
                foreach ($this->taskIdList as $item1) {
                    $res['taskIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['monitorStatusList'])) {
            if (!empty($map['monitorStatusList'])) {
                $model->monitorStatusList = [];
                $n1 = 0;
                foreach ($map['monitorStatusList'] as $item1) {
                    $model->monitorStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskIdList'])) {
            if (!empty($map['taskIdList'])) {
                $model->taskIdList = [];
                $n1 = 0;
                foreach ($map['taskIdList'] as $item1) {
                    $model->taskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
