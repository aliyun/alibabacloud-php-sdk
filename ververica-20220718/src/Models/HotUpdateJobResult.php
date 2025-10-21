<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class HotUpdateJobResult extends Model
{
    /**
     * @var HotUpdateJobParams
     */
    public $hotUpdateParams;

    /**
     * @var string
     */
    public $jobHotUpdateId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var HotUpdateJobStatus
     */
    public $status;

    /**
     * @var BriefResourceSetting
     */
    public $targetResourceSetting;
    protected $_name = [
        'hotUpdateParams' => 'hotUpdateParams',
        'jobHotUpdateId' => 'jobHotUpdateId',
        'jobId' => 'jobId',
        'status' => 'status',
        'targetResourceSetting' => 'targetResourceSetting',
    ];

    public function validate()
    {
        if (null !== $this->hotUpdateParams) {
            $this->hotUpdateParams->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->targetResourceSetting) {
            $this->targetResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotUpdateParams) {
            $res['hotUpdateParams'] = null !== $this->hotUpdateParams ? $this->hotUpdateParams->toArray($noStream) : $this->hotUpdateParams;
        }

        if (null !== $this->jobHotUpdateId) {
            $res['jobHotUpdateId'] = $this->jobHotUpdateId;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->targetResourceSetting) {
            $res['targetResourceSetting'] = null !== $this->targetResourceSetting ? $this->targetResourceSetting->toArray($noStream) : $this->targetResourceSetting;
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
        if (isset($map['hotUpdateParams'])) {
            $model->hotUpdateParams = HotUpdateJobParams::fromMap($map['hotUpdateParams']);
        }

        if (isset($map['jobHotUpdateId'])) {
            $model->jobHotUpdateId = $map['jobHotUpdateId'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['status'])) {
            $model->status = HotUpdateJobStatus::fromMap($map['status']);
        }

        if (isset($map['targetResourceSetting'])) {
            $model->targetResourceSetting = BriefResourceSetting::fromMap($map['targetResourceSetting']);
        }

        return $model;
    }
}
