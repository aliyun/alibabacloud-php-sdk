<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class PredictPreTrainModelRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $binaryToText;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $content;

    /**
     * @example FormUIE
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
     * @return PredictPreTrainModelRequest
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
