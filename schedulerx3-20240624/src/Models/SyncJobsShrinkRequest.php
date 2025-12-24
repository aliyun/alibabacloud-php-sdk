<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class SyncJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $jobIdsShrink;

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
        'jobIdsShrink' => 'JobIds',
        'originalAppName' => 'OriginalAppName',
        'originalClusterId' => 'OriginalClusterId',
        'targetAppName' => 'TargetAppName',
        'targetClusterId' => 'TargetClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobIdsShrink) {
            $res['JobIds'] = $this->jobIdsShrink;
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
            $model->jobIdsShrink = $map['JobIds'];
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
