<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteFileMetaRequest extends Model
{
    /**
     * @description The name of the dataset. You can obtain the name of the dataset from the response of the [CreateDataset](https://help.aliyun.com/document_detail/478160.html) operation.
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The URIs of the OSS buckets in which the files whose metadata you want to delete are stored. You can specify up to 100 URIs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $URIs;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URIs'        => 'URIs',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->URIs) {
            $res['URIs'] = $this->URIs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteFileMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['URIs'])) {
            if (!empty($map['URIs'])) {
                $model->URIs = $map['URIs'];
            }
        }

        return $model;
    }
}
