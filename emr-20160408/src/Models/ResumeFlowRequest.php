<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ResumeFlowRequest extends Model
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
    protected $_name = [
        'regionId'       => 'RegionId',
        'projectId'      => 'ProjectId',
        'flowInstanceId' => 'FlowInstanceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeFlowRequest
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

        return $model;
    }
}
