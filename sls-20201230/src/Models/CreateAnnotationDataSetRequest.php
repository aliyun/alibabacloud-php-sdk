<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateAnnotationDataSetRequest extends Model
{
    /**
     * @description The data structure of the request.
     *
     * @var MLDataSetParam
     */
    public $body;

    /**
     * @description The unique identifier of the dataset.
     *
     * @example cb8cc4eb51a85e823471cdb368fae9be
     *
     * @var string
     */
    public $datasetId;
    protected $_name = [
        'body'      => 'body',
        'datasetId' => 'datasetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAnnotationDataSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = MLDataSetParam::fromMap($map['body']);
        }
        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        return $model;
    }
}
