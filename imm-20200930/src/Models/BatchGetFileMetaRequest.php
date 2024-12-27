<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchGetFileMetaRequest extends Model
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
     * @description The array of object URIs. You can specify up to 100 object URIs in an array.
     *
     * This parameter is required.
     * @var string[]
     */
    public $URIs;

    /**
     * @description The fields to return. If you specify this parameter, only specified metadata fields are returned. You can use this parameter to control the size of the response.
     *
     * If you do not specify this parameter or leave this parameter empty, the operation returns all metadata fields.
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URIs'        => 'URIs',
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
        if (null !== $this->URIs) {
            $res['URIs'] = $this->URIs;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetFileMetaRequest
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
        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = $map['WithFields'];
            }
        }

        return $model;
    }
}
