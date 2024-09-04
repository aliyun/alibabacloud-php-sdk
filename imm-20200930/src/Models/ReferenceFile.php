<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ReferenceFile extends Model
{
    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example 75d5de2c50754e3dadd5c35dbca5f9949369e37eb342a73821f690c94c36c7f7
     *
     * @var string
     */
    public $objectId;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example oss://test-bucket/test-object.jpg
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'objectId'    => 'ObjectId',
        'projectName' => 'ProjectName',
        'URI'         => 'URI',
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
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReferenceFile
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
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
