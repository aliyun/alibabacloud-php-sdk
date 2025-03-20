<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\outputs;

use AlibabaCloud\Tea\Model;

class taskOutputs extends Model
{
    /**
     * @description The identifier of the output.
     *
     * @example pre.odps_sql_demo_0
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'output' => 'Output',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskOutputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
