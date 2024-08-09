<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'hotUpdateParams'       => 'hotUpdateParams',
        'jobHotUpdateId'        => 'jobHotUpdateId',
        'jobId'                 => 'jobId',
        'status'                => 'status',
        'targetResourceSetting' => 'targetResourceSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotUpdateParams) {
            $res['hotUpdateParams'] = null !== $this->hotUpdateParams ? $this->hotUpdateParams->toMap() : null;
        }
        if (null !== $this->jobHotUpdateId) {
            $res['jobHotUpdateId'] = $this->jobHotUpdateId;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->targetResourceSetting) {
            $res['targetResourceSetting'] = null !== $this->targetResourceSetting ? $this->targetResourceSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotUpdateJobResult
     */
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
