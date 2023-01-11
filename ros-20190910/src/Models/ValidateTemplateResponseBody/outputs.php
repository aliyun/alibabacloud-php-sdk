<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @example The instance ID of my ECS.
     *
     * @var string
     */
    public $description;

    /**
     * @example Instance ID
     *
     * @var string
     */
    public $label;

    /**
     * @example instance_id
     *
     * @var string
     */
    public $outputKey;
    protected $_name = [
        'description' => 'Description',
        'label'       => 'Label',
        'outputKey'   => 'OutputKey',
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
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->outputKey) {
            $res['OutputKey'] = $this->outputKey;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['OutputKey'])) {
            $model->outputKey = $map['OutputKey'];
        }

        return $model;
    }
}
