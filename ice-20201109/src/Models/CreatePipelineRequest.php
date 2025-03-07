<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineRequest extends Model
{
    /**
     * @description The name of the MPS queue.
     *
     * This parameter is required.
     * @example test-pipeline
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority. Default value: 6. Valid values: 1 to 10. A greater value specifies a higher priority.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;

    /**
     * @description The type of the MPS queue. Valid values:
     *
     * This parameter is required.
     * @example Standard
     *
     * @var string
     */
    public $speed;
    protected $_name = [
        'name'     => 'Name',
        'priority' => 'Priority',
        'speed'    => 'Speed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
