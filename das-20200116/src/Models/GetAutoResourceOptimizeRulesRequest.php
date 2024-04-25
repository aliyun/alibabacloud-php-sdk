<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAutoResourceOptimizeRulesRequest extends Model
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
     *   Specify the parameter value as a JSON array, such as `[\"Database account 1\",\"Database account 2\"]`. Separate database instance IDs with commas (,).
     *
     *   By default, if you leave this parameter empty, all database instances for which the automatic fragment recycling feature has been enabled within the current Alibaba Cloud account are returned. The following types of database instances are returned:
     *
     *   Database instances for which the automatic fragment recycling feature is currently enabled.
     *   Database instances for which the automatic fragment recycling feature was once enabled but is currently disabled, including those for which DAS Enterprise Edition has been disabled but excluding those that have been released.
     *
     * @example [\"rm-2ze8g2am97624****\",\"rm-2vc54m2a6pd6p****\",\"rm-2ze9xrhze0709****\",\"rm-2ze8g2am97627****\"]
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
     * @return GetAutoResourceOptimizeRulesRequest
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
