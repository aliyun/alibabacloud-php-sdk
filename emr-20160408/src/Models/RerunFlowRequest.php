<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RerunFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowInstanceId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $reRunFail;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'flowInstanceId' => 'FlowInstanceId',
        'projectId'      => 'ProjectId',
        'reRunFail'      => 'ReRunFail',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->reRunFail) {
            $res['ReRunFail'] = $this->reRunFail;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RerunFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ReRunFail'])) {
            $model->reRunFail = $map['ReRunFail'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
