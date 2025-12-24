<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponseBody;

use AlibabaCloud\Dara\Model;

class openApiMetaList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exampleValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'exampleValue' => 'ExampleValue',
        'name' => 'Name',
        'required' => 'Required',
        'style' => 'Style',
        'type' => 'Type',
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

        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
