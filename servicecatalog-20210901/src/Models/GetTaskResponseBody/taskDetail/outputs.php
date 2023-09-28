<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description The description of the output parameter for the template.
     *
     * @example The ECS instance ID.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the output parameter for the template.
     *
     * @example instance_id
     *
     * @var string
     */
    public $outputKey;

    /**
     * @description The value of the output parameter for the template.
     *
     * @example i-xxxxxx
     *
     * @var string
     */
    public $outputValue;
    protected $_name = [
        'description' => 'Description',
        'outputKey'   => 'OutputKey',
        'outputValue' => 'OutputValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return outputs
     */
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
