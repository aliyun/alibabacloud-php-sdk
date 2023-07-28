<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The description of the task.
     *
     * @example (Required) The status of the Ecs instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the task.
     *
     * @example foo
     *
     * @var string
     */
    public $name;

    /**
     * @description The outputs of the task.
     *
     * @example .instanceId
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The properties of the task.
     *
     * @example {"API": "DescribeInstances","Parameters": {"Status": "{{ Status }}"},"Service": "Ecs"}
     *
     * @var string
     */
    public $properties;

    /**
     * @description The type of the task.
     *
     * @example ACS::ExecuteAPI
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'outputs'     => 'Outputs',
        'properties'  => 'Properties',
        'type'        => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
