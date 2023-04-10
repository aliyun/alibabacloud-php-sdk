<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class CreateModelAsyncPredictRequest extends Model
{
    /**
     * @var bool
     */
    public $binaryToText;

    /**
     * @var string
     */
    public $body;

    /**
     * @example https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/1559855998794593/stage/upload/20230206/oss-hlfCRJ1SorSWs10MkqxK6YcL4OVAFSv4.png?Expires=1675665563&OSSAccessKeyId=XXXX&Signature=WLKghBc3zKzWJ3Td69%2B4C21jrbE%3D
     *
     * @var string
     */
    public $content;

    /**
     * @example 123
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
     * @example pre_train_service
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
    protected $_name = [
        'binaryToText'   => 'BinaryToText',
        'body'           => 'Body',
        'content'        => 'Content',
        'modelId'        => 'ModelId',
        'modelVersion'   => 'ModelVersion',
        'serviceName'    => 'ServiceName',
        'serviceVersion' => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binaryToText) {
            $res['BinaryToText'] = $this->binaryToText;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelAsyncPredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinaryToText'])) {
            $model->binaryToText = $map['BinaryToText'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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

        return $model;
    }
}
