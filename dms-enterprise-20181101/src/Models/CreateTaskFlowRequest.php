<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskFlowRequest extends Model
{
    /**
     * @description The name of the task flow.
     *
     * This parameter is required.
     * @example Dag_Name
     *
     * @var string
     */
    public $dagName;

    /**
     * @description The description of the task flow.
     *
     * @example zht_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the scenario.
     *
     * @example 2**
     *
     * @var int
     */
    public $scenarioId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagName'     => 'DagName',
        'description' => 'Description',
        'scenarioId'  => 'ScenarioId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return CreateTaskFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
