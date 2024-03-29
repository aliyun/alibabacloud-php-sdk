<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateAsyncPredictRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var string
     */
    public $detailTag;

    /**
     * @example true,false
     *
     * @var string
     */
    public $fetchContent;

    /**
     * @example [base64 encode content]
     *
     * @var string
     */
    public $fileContent;

    /**
     * @example text,html,pdf,docx,doc
     *
     * @var string
     */
    public $fileType;

    /**
     * @example http://127.0.0.1/example.docx
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $modelId;

    /**
     * @example V1
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example ContractNERPretrain
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example V1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @example 0,3
     *
     * @var int
     */
    public $topK;
    protected $_name = [
        'content'        => 'Content',
        'detailTag'      => 'DetailTag',
        'fetchContent'   => 'FetchContent',
        'fileContent'    => 'FileContent',
        'fileType'       => 'FileType',
        'fileUrl'        => 'FileUrl',
        'modelId'        => 'ModelId',
        'modelVersion'   => 'ModelVersion',
        'serviceName'    => 'ServiceName',
        'serviceVersion' => 'ServiceVersion',
        'topK'           => 'TopK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->detailTag) {
            $res['DetailTag'] = $this->detailTag;
        }
        if (null !== $this->fetchContent) {
            $res['FetchContent'] = $this->fetchContent;
        }
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAsyncPredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DetailTag'])) {
            $model->detailTag = $map['DetailTag'];
        }
        if (isset($map['FetchContent'])) {
            $model->fetchContent = $map['FetchContent'];
        }
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
