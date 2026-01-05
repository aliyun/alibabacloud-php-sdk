<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail;

use AlibabaCloud\Dara\Model;

class outputs extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $outputKey;

    /**
     * @var string
     */
    public $outputValue;
    protected $_name = [
        'description' => 'Description',
        'outputKey' => 'OutputKey',
        'outputValue' => 'OutputValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->outputKey) {
            $res['OutputKey'] = $this->outputKey;
        }

        if (null !== $this->outputValue) {
            $res['OutputValue'] = $this->outputValue;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OutputKey'])) {
            $model->outputKey = $map['OutputKey'];
        }

        if (isset($map['OutputValue'])) {
            $model->outputValue = $map['OutputValue'];
        }

        return $model;
    }
}
