<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class QueryStorageMetricRequest extends Model
{
    /**
     * @var string[]
     */
    public $projectList;

    /**
     * @var string[]
     */
    public $typeList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'projectList' => 'projectList',
        'typeList' => 'typeList',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->projectList)) {
            Model::validateArray($this->projectList);
        }
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectList) {
            if (\is_array($this->projectList)) {
                $res['projectList'] = [];
                $n1 = 0;
                foreach ($this->projectList as $item1) {
                    $res['projectList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['typeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['typeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['projectList'])) {
            if (!empty($map['projectList'])) {
                $model->projectList = [];
                $n1 = 0;
                foreach ($map['projectList'] as $item1) {
                    $model->projectList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['typeList'])) {
            if (!empty($map['typeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['typeList'] as $item1) {
                    $model->typeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
