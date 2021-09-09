<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $pipelineStatus;
    protected $_name = [
        'pipelineId'     => 'pipelineId',
        'gmtUpdateTime'  => 'gmtUpdateTime',
        'gmtCreatedTime' => 'gmtCreatedTime',
        'pipelineStatus' => 'pipelineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->pipelineStatus) {
            $res['pipelineStatus'] = $this->pipelineStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['pipelineStatus'])) {
            $model->pipelineStatus = $map['pipelineStatus'];
        }

        return $model;
    }
}
