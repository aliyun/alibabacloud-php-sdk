<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

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
    public $label;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['OutputKey'])) {
            $model->outputKey = $map['OutputKey'];
        }

        return $model;
    }
}
