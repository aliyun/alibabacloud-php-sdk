<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source;
use AlibabaCloud\Tea\Model;

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
        'detail'     => 'Detail',
        'jobStatus'  => 'JobStatus',
        'plan'       => 'Plan',
        'ruleNames'  => 'RuleNames',
        'source'     => 'Source',
        'updateTime' => 'UpdateTime',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Plan'] = null !== $this->plan ? $this->plan->toMap() : null;
        }
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
        }
        if (null !== $this->source) {
            $res['Source'] = [];
            if (null !== $this->source && \is_array($this->source)) {
                $n = 0;
                foreach ($this->source as $item) {
                    $res['Source'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return MigrationJob
     */
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
                $model->ruleNames = $map['RuleNames'];
            }
        }
        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                $n             = 0;
                foreach ($map['Source'] as $item) {
                    $model->source[$n++] = null !== $item ? source::fromMap($item) : $item;
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
