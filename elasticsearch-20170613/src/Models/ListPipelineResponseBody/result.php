<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2020-08-05T03:10:38.188Z
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @example 2020-08-05T08:43:31.757Z
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @description The status of the pipeline. Supported:
     *
     *   NOT_DEPLOYED: The node is not deployed.
     *   RUNNING
     *   DELETED: Deleted. The console does not display this status.
     *
     * @example pipeline_test
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example NOT_DEPLOYED
     *
     * @var string
     */
    public $pipelineStatus;
    protected $_name = [
        'gmtCreatedTime' => 'gmtCreatedTime',
        'gmtUpdateTime'  => 'gmtUpdateTime',
        'pipelineId'     => 'pipelineId',
        'pipelineStatus' => 'pipelineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
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
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineStatus'])) {
            $model->pipelineStatus = $map['pipelineStatus'];
        }

        return $model;
    }
}
