<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\overview;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\scopeConfig;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\unhealthyJobs;

class data extends Model
{
    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var overview
     */
    public $overview;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var unhealthyJobs[]
     */
    public $unhealthyJobs;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'completedAt' => 'completedAt',
        'createdAt' => 'createdAt',
        'namespace' => 'namespace',
        'overview' => 'overview',
        'reportId' => 'reportId',
        'scopeConfig' => 'scopeConfig',
        'scopeType' => 'scopeType',
        'triggerType' => 'triggerType',
        'unhealthyJobs' => 'unhealthyJobs',
        'updatedAt' => 'updatedAt',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->overview) {
            $this->overview->validate();
        }
        if (null !== $this->scopeConfig) {
            $this->scopeConfig->validate();
        }
        if (\is_array($this->unhealthyJobs)) {
            Model::validateArray($this->unhealthyJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->overview) {
            $res['overview'] = null !== $this->overview ? $this->overview->toArray($noStream) : $this->overview;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->scopeConfig) {
            $res['scopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->unhealthyJobs) {
            if (\is_array($this->unhealthyJobs)) {
                $res['unhealthyJobs'] = [];
                $n1 = 0;
                foreach ($this->unhealthyJobs as $item1) {
                    $res['unhealthyJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['overview'])) {
            $model->overview = overview::fromMap($map['overview']);
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['scopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['scopeConfig']);
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['unhealthyJobs'])) {
            if (!empty($map['unhealthyJobs'])) {
                $model->unhealthyJobs = [];
                $n1 = 0;
                foreach ($map['unhealthyJobs'] as $item1) {
                    $model->unhealthyJobs[$n1] = unhealthyJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
