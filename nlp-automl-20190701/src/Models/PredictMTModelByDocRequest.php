<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class PredictMTModelByDocRequest extends Model
{
    /**
     * @var string
     */
    public $fileContent;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var bool
     */
    public $needXLIFF;

    /**
     * @var string
     */
    public $modelVersion;
    protected $_name = [
        'fileContent'  => 'FileContent',
        'fileType'     => 'FileType',
        'modelId'      => 'ModelId',
        'needXLIFF'    => 'NeedXLIFF',
        'modelVersion' => 'ModelVersion',
    ];

    public function validate()
    {
        Model::validateRequired('fileContent', $this->fileContent, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('modelId', $this->modelId, true);
        Model::validateRequired('modelVersion', $this->modelVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->needXLIFF) {
            $res['NeedXLIFF'] = $this->needXLIFF;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictMTModelByDocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['NeedXLIFF'])) {
            $model->needXLIFF = $map['NeedXLIFF'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        return $model;
    }
}
