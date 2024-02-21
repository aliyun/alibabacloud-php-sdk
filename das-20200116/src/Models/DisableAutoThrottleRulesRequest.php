<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DisableAutoThrottleRulesRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The database instance IDs.
     *
     * >  Set this parameter to a JSON array that consists of multiple instance IDs. Separate instance IDs with commas (,). Example: `[\"Instance ID1\",\"Instance ID2\"]`.
     * @example [\"rm-2ze8g2am97624****\",\"rm-2ze9xrhze0709****\"]
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceIds'    => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableAutoThrottleRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
