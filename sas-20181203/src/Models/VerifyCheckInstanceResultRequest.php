<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class VerifyCheckInstanceResultRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var int[]
     */
    public $checkIds;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $taskSource;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkIds' => 'CheckIds',
        'instanceIds' => 'InstanceIds',
        'taskSource' => 'TaskSource',
    ];

    public function validate()
    {
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskSource) {
            $res['TaskSource'] = $this->taskSource;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskSource'])) {
            $model->taskSource = $map['TaskSource'];
        }

        return $model;
    }
}
