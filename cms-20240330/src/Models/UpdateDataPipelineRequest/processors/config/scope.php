<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors\config\scope\conditions;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors\config\scope\metricName;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors\config\scope\serviceName;

class scope extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var metricName
     */
    public $metricName;

    /**
     * @var serviceName
     */
    public $serviceName;
    protected $_name = [
        'conditions' => 'conditions',
        'metricName' => 'metricName',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (null !== $this->metricName) {
            $this->metricName->validate();
        }
        if (null !== $this->serviceName) {
            $this->serviceName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['metricName'] = null !== $this->metricName ? $this->metricName->toArray($noStream) : $this->metricName;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = null !== $this->serviceName ? $this->serviceName->toArray($noStream) : $this->serviceName;
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
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metricName'])) {
            $model->metricName = metricName::fromMap($map['metricName']);
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = serviceName::fromMap($map['serviceName']);
        }

        return $model;
    }
}
