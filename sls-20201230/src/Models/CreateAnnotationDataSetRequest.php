<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateAnnotationDataSetRequest extends Model
{
    /**
     * @var MLDataSetParam
     */
    public $body;

    /**
     * @var string
     */
    public $datasetId;
    protected $_name = [
        'body' => 'body',
        'datasetId' => 'datasetId',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
