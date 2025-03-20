<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @description The identifier of the output of the ancestor task.
     *
     * @example pre.odps_sql_demo_0
     *
     * @var string
     */
    public $upstreamOutput;
    protected $_name = [
        'upstreamOutput' => 'UpstreamOutput',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->upstreamOutput) {
            $res['UpstreamOutput'] = $this->upstreamOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpstreamOutput'])) {
            $model->upstreamOutput = $map['UpstreamOutput'];
        }

        return $model;
    }
}
