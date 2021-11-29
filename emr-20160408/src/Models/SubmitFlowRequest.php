<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class SubmitFlowRequest extends Model
{
    /**
     * @var string
     */
    public $conf;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'conf'      => 'Conf',
        'flowId'    => 'FlowId',
        'projectId' => 'ProjectId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
