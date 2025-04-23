<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo\aclLimit;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo\resourceLimit;

class pbsInfo extends Model
{
    /**
     * @var aclLimit[]
     */
    public $aclLimit;

    /**
     * @var int
     */
    public $jobHistoryDuration;

    /**
     * @var resourceLimit[]
     */
    public $resourceLimit;

    /**
     * @var int
     */
    public $schedInterval;

    /**
     * @var int
     */
    public $schedMaxJobs;

    /**
     * @var int
     */
    public $schedMaxQueuedJobs;
    protected $_name = [
        'aclLimit' => 'AclLimit',
        'jobHistoryDuration' => 'JobHistoryDuration',
        'resourceLimit' => 'ResourceLimit',
        'schedInterval' => 'SchedInterval',
        'schedMaxJobs' => 'SchedMaxJobs',
        'schedMaxQueuedJobs' => 'SchedMaxQueuedJobs',
    ];

    public function validate()
    {
        if (\is_array($this->aclLimit)) {
            Model::validateArray($this->aclLimit);
        }
        if (\is_array($this->resourceLimit)) {
            Model::validateArray($this->resourceLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclLimit) {
            if (\is_array($this->aclLimit)) {
                $res['AclLimit'] = [];
                $n1 = 0;
                foreach ($this->aclLimit as $item1) {
                    $res['AclLimit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->jobHistoryDuration) {
            $res['JobHistoryDuration'] = $this->jobHistoryDuration;
        }

        if (null !== $this->resourceLimit) {
            if (\is_array($this->resourceLimit)) {
                $res['ResourceLimit'] = [];
                $n1 = 0;
                foreach ($this->resourceLimit as $item1) {
                    $res['ResourceLimit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->schedInterval) {
            $res['SchedInterval'] = $this->schedInterval;
        }

        if (null !== $this->schedMaxJobs) {
            $res['SchedMaxJobs'] = $this->schedMaxJobs;
        }

        if (null !== $this->schedMaxQueuedJobs) {
            $res['SchedMaxQueuedJobs'] = $this->schedMaxQueuedJobs;
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
        if (isset($map['AclLimit'])) {
            if (!empty($map['AclLimit'])) {
                $model->aclLimit = [];
                $n1 = 0;
                foreach ($map['AclLimit'] as $item1) {
                    $model->aclLimit[$n1++] = aclLimit::fromMap($item1);
                }
            }
        }

        if (isset($map['JobHistoryDuration'])) {
            $model->jobHistoryDuration = $map['JobHistoryDuration'];
        }

        if (isset($map['ResourceLimit'])) {
            if (!empty($map['ResourceLimit'])) {
                $model->resourceLimit = [];
                $n1 = 0;
                foreach ($map['ResourceLimit'] as $item1) {
                    $model->resourceLimit[$n1++] = resourceLimit::fromMap($item1);
                }
            }
        }

        if (isset($map['SchedInterval'])) {
            $model->schedInterval = $map['SchedInterval'];
        }

        if (isset($map['SchedMaxJobs'])) {
            $model->schedMaxJobs = $map['SchedMaxJobs'];
        }

        if (isset($map['SchedMaxQueuedJobs'])) {
            $model->schedMaxQueuedJobs = $map['SchedMaxQueuedJobs'];
        }

        return $model;
    }
}
