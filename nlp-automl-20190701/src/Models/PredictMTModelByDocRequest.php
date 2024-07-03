<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class PredictMTModelByDocRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [base64 encode content]
     *
     * @var string
     */
    public $fileContent;

    /**
     * @description This parameter is required.
     *
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $modelId;

    /**
     * @description This parameter is required.
     *
     * @example v1
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $needXLIFF;
    protected $_name = [
        'fileContent'  => 'FileContent',
        'fileType'     => 'FileType',
        'modelId'      => 'ModelId',
        'modelVersion' => 'ModelVersion',
        'needXLIFF'    => 'NeedXLIFF',
    ];

    public function validate()
    {
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
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->needXLIFF) {
            $res['NeedXLIFF'] = $this->needXLIFF;
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
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['NeedXLIFF'])) {
            $model->needXLIFF = $map['NeedXLIFF'];
        }

        return $model;
    }
}
