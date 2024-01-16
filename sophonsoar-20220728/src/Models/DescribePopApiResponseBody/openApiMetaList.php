<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponseBody;

use AlibabaCloud\Tea\Model;

class openApiMetaList extends Model
{
    /**
     * @description The parameter description.
     *
     * @example demo parameter
     *
     * @var string
     */
    public $description;

    /**
     * @description The example value.
     *
     * @example 12.xx.xx.xx
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description The parameter name.
     *
     * @example DescribePopApi
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the parameter is required.
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $required;

    /**
     * @description The data type of the parameter field. Valid values:
     *
     *   **string**
     *   **boolean**
     *   **integer**
     *   **long**
     *
     * @example string
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'  => 'Description',
        'exampleValue' => 'ExampleValue',
        'name'         => 'Name',
        'required'     => 'Required',
        'type'         => 'Type',
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
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openApiMetaList
     */
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
