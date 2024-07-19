<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\modelResults;

use AlibabaCloud\Tea\Model;

class modelResult extends Model
{
    /**
     * @description The cause of the failure if the model fails to be imported.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The API group ID.
     *
     * @example 736508d885074167ba8fbce3bc95ea0b
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the imported model.
     *
     * @example 6b48d724c921415486e190c494dd6bf8
     *
     * @var string
     */
    public $modelId;

    /**
     * @description The model name.
     *
     * @example Pet
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The execution status of the subtask. Valid values:
     *
     *   RUNNING
     *   WAIT
     *   OVER
     *   FAIL
     *   CANCEL
     *
     * @example FAIL
     *
     * @var string
     */
    public $updateStatus;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'groupId'      => 'GroupId',
        'modelId'      => 'ModelId',
        'modelName'    => 'ModelName',
        'updateStatus' => 'UpdateStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->updateStatus) {
            $res['UpdateStatus'] = $this->updateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['UpdateStatus'])) {
            $model->updateStatus = $map['UpdateStatus'];
        }

        return $model;
    }
}
