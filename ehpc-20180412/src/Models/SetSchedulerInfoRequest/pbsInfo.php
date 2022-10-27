<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo\aclLimit;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo\resourceLimit;
use AlibabaCloud\Tea\Model;

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
        'aclLimit'           => 'AclLimit',
        'jobHistoryDuration' => 'JobHistoryDuration',
        'resourceLimit'      => 'ResourceLimit',
        'schedInterval'      => 'SchedInterval',
        'schedMaxJobs'       => 'SchedMaxJobs',
        'schedMaxQueuedJobs' => 'SchedMaxQueuedJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclLimit) {
            $res['AclLimit'] = [];
            if (null !== $this->aclLimit && \is_array($this->aclLimit)) {
                $n = 0;
                foreach ($this->aclLimit as $item) {
                    $res['AclLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobHistoryDuration) {
            $res['JobHistoryDuration'] = $this->jobHistoryDuration;
        }
        if (null !== $this->resourceLimit) {
            $res['ResourceLimit'] = [];
            if (null !== $this->resourceLimit && \is_array($this->resourceLimit)) {
                $n = 0;
                foreach ($this->resourceLimit as $item) {
                    $res['ResourceLimit'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return pbsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclLimit'])) {
            if (!empty($map['AclLimit'])) {
                $model->aclLimit = [];
                $n               = 0;
                foreach ($map['AclLimit'] as $item) {
                    $model->aclLimit[$n++] = null !== $item ? aclLimit::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobHistoryDuration'])) {
            $model->jobHistoryDuration = $map['JobHistoryDuration'];
        }
        if (isset($map['ResourceLimit'])) {
            if (!empty($map['ResourceLimit'])) {
                $model->resourceLimit = [];
                $n                    = 0;
                foreach ($map['ResourceLimit'] as $item) {
                    $model->resourceLimit[$n++] = null !== $item ? resourceLimit::fromMap($item) : $item;
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
