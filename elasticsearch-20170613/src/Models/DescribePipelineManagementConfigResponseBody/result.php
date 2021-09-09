<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $endpoints;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $pipelineManagementType;

    /**
     * @var string
     */
    public $esInstanceId;

    /**
     * @var string[]
     */
    public $pipelineIds;
    protected $_name = [
        'endpoints'              => 'endpoints',
        'userName'               => 'userName',
        'pipelineManagementType' => 'pipelineManagementType',
        'esInstanceId'           => 'esInstanceId',
        'pipelineIds'            => 'pipelineIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['endpoints'] = $this->endpoints;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->pipelineManagementType) {
            $res['pipelineManagementType'] = $this->pipelineManagementType;
        }
        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }
        if (null !== $this->pipelineIds) {
            $res['pipelineIds'] = $this->pipelineIds;
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
        if (isset($map['endpoints'])) {
            $model->endpoints = $map['endpoints'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['pipelineManagementType'])) {
            $model->pipelineManagementType = $map['pipelineManagementType'];
        }
        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }
        if (isset($map['pipelineIds'])) {
            if (!empty($map['pipelineIds'])) {
                $model->pipelineIds = $map['pipelineIds'];
            }
        }

        return $model;
    }
}
