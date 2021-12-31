<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsResponseBody\result;

use AlibabaCloud\Tea\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithmType' => 'algorithmType',
        'modelId'       => 'modelId',
        'modelName'     => 'modelName',
        'progress'      => 'progress',
        'projectId'     => 'projectId',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['algorithmType'] = $this->algorithmType;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return models
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithmType'])) {
            $model->algorithmType = $map['algorithmType'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
