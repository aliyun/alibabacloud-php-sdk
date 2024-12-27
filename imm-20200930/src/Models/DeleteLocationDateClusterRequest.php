<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteLocationDateClusterRequest extends Model
{
    /**
     * @description The name of the dataset. For information about how to create a dataset, see [CreateDataset](https://help.aliyun.com/document_detail/478160.html).
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The ID of the group to be deleted.
     *
     * This parameter is required.
     * @example location-date-cluster-71dd4f32-9597-4085-a2ab-3a7b0fd0aff9
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'objectId'    => 'ObjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLocationDateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
