<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class SyncJobsRequest extends Model
{
    /**
     * @var int[]
     */
    public $jobIds;

    /**
     * @var string
     */
    public $originalAppName;

    /**
     * @var string
     */
    public $originalClusterId;

    /**
     * @var string
     */
    public $targetAppName;

    /**
     * @var string
     */
    public $targetClusterId;
    protected $_name = [
        'jobIds' => 'JobIds',
        'originalAppName' => 'OriginalAppName',
        'originalClusterId' => 'OriginalClusterId',
        'targetAppName' => 'TargetAppName',
        'targetClusterId' => 'TargetClusterId',
    ];

    public function validate()
    {
        if (\is_array($this->jobIds)) {
            Model::validateArray($this->jobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobIds) {
            if (\is_array($this->jobIds)) {
                $res['JobIds'] = [];
                $n1 = 0;
                foreach ($this->jobIds as $item1) {
                    $res['JobIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalAppName) {
            $res['OriginalAppName'] = $this->originalAppName;
        }

        if (null !== $this->originalClusterId) {
            $res['OriginalClusterId'] = $this->originalClusterId;
        }

        if (null !== $this->targetAppName) {
            $res['TargetAppName'] = $this->targetAppName;
        }

        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
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
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = [];
                $n1 = 0;
                foreach ($map['JobIds'] as $item1) {
                    $model->jobIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginalAppName'])) {
            $model->originalAppName = $map['OriginalAppName'];
        }

        if (isset($map['OriginalClusterId'])) {
            $model->originalClusterId = $map['OriginalClusterId'];
        }

        if (isset($map['TargetAppName'])) {
            $model->targetAppName = $map['TargetAppName'];
        }

        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
        }

        return $model;
    }
}
