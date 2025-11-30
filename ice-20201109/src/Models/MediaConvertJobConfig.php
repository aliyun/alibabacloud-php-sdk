<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\inputs;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\outputGroups;

class MediaConvertJobConfig extends Model
{
    /**
     * @var inputs[]
     */
    public $inputs;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var outputGroups[]
     */
    public $outputGroups;
    protected $_name = [
        'inputs' => 'Inputs',
        'jobName' => 'JobName',
        'outputGroups' => 'OutputGroups',
    ];

    public function validate()
    {
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (\is_array($this->outputGroups)) {
            Model::validateArray($this->outputGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['Inputs'] = [];
                $n1 = 0;
                foreach ($this->inputs as $item1) {
                    $res['Inputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->outputGroups) {
            if (\is_array($this->outputGroups)) {
                $res['OutputGroups'] = [];
                $n1 = 0;
                foreach ($this->outputGroups as $item1) {
                    $res['OutputGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n1 = 0;
                foreach ($map['Inputs'] as $item1) {
                    $model->inputs[$n1] = inputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['OutputGroups'])) {
            if (!empty($map['OutputGroups'])) {
                $model->outputGroups = [];
                $n1 = 0;
                foreach ($map['OutputGroups'] as $item1) {
                    $model->outputGroups[$n1] = outputGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
