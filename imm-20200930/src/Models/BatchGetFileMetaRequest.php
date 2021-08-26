<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchGetFileMetaRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string[]
     */
    public $URIs;
    protected $_name = [
        'projectName' => 'ProjectName',
        'datasetName' => 'DatasetName',
        'URIs'        => 'URIs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->URIs) {
            $res['URIs'] = $this->URIs;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['URIs'])) {
            if (!empty($map['URIs'])) {
                $model->URIs = $map['URIs'];
            }
        }

        return $model;
    }
}
