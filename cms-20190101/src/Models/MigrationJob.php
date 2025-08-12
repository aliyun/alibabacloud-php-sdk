<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source;

class MigrationJob extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var plan
     */
    public $plan;

    /**
     * @var string[]
     */
    public $ruleNames;

    /**
     * @var source[]
     */
    public $source;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'createTime' => 'CreateTime',
        'detail' => 'Detail',
        'jobStatus' => 'JobStatus',
        'plan' => 'Plan',
        'ruleNames' => 'RuleNames',
        'source' => 'Source',
        'updateTime' => 'UpdateTime',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->plan) {
            $this->plan->validate();
        }
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
        }
        if (\is_array($this->source)) {
            Model::validateArray($this->source);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->plan) {
            $res['Plan'] = null !== $this->plan ? $this->plan->toArray($noStream) : $this->plan;
        }

        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['RuleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['RuleNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            if (\is_array($this->source)) {
                $res['Source'] = [];
                $n1 = 0;
                foreach ($this->source as $item1) {
                    $res['Source'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['Plan'])) {
            $model->plan = plan::fromMap($map['Plan']);
        }

        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['RuleNames'] as $item1) {
                    $model->ruleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                $n1 = 0;
                foreach ($map['Source'] as $item1) {
                    $model->source[$n1] = source::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
