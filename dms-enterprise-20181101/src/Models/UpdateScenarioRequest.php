<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateScenarioRequest extends Model
{
    /**
     * @description The description of the business scenario.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the business scenario.
     *
     * This parameter is required.
     *
     * @example 12***
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @description The name of the business scenario.
     *
     * This parameter is required.
     *
     * @example Business scenario - test
     *
     * @var string
     */
    public $scenarioName;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'description' => 'Description',
        'scenarioId' => 'ScenarioId',
        'scenarioName' => 'ScenarioName',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
