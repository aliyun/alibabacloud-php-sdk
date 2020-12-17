<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description 资源ID。
     *
     * @var string
     */
    public $outputKey;

    /**
     * @description 资源名称。
     *
     * @var string
     */
    public $outputValue;

    /**
     * @description 资源描述。
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'outputKey'   => 'OutputKey',
        'outputValue' => 'OutputValue',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputKey) {
            $res['OutputKey'] = $this->outputKey;
        }
        if (null !== $this->outputValue) {
            $res['OutputValue'] = $this->outputValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['OutputKey'])) {
            $model->outputKey = $map['OutputKey'];
        }
        if (isset($map['OutputValue'])) {
            $model->outputValue = $map['OutputValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
