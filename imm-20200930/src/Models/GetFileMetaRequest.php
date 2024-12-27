<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetFileMetaRequest extends Model
{
    /**
     * @description The name of the dataset.[](~~478160~~)
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The URI of the file. Make sure that the file is indexed****.
     *
     * This parameter is required.
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;

    /**
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URI'         => 'URI',
        'withFields'  => 'WithFields',
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
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileMetaRequest
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
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = $map['WithFields'];
            }
        }

        return $model;
    }
}
