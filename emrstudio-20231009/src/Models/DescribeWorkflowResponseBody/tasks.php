<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example task description
     *
     * @var string
     */
    public $description;

    /**
     * @example task_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 123123
     *
     * @var int
     */
    public $taskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'taskId'      => 'taskId',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
