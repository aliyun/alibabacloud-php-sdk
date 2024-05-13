<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class MoveTaskFlowToScenarioRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     * @example 11****
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the business scenario to which you want to migrate your task flow. If this parameter is set to the default value or a value that is less than or equal to 0, the task flow is migrated to the default business scenario.
     *
     * @example 1****
     *
     * @var int
     */
    public $scenarioId;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'      => 'DagId',
        'scenarioId' => 'ScenarioId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveTaskFlowToScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
