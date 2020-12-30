<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class SubmitFlowRequest extends Model
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
    public $flowId;

    /**
     * @var string
     */
    public $conf;
    protected $_name = [
        'regionId'  => 'RegionId',
        'projectId' => 'ProjectId',
        'flowId'    => 'FlowId',
        'conf'      => 'Conf',
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
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitFlowRequest
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }

        return $model;
    }
}
