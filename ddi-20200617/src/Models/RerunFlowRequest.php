<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class RerunFlowRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $flowInstanceId;

    /**
     * @var bool
     */
    public $reRunFail;
    protected $_name = [
        'regionId'       => 'RegionId',
        'projectId'      => 'ProjectId',
        'flowInstanceId' => 'FlowInstanceId',
        'reRunFail'      => 'ReRunFail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->reRunFail) {
            $res['ReRunFail'] = $this->reRunFail;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['ReRunFail'])) {
            $model->reRunFail = $map['ReRunFail'];
        }

        return $model;
    }
}
