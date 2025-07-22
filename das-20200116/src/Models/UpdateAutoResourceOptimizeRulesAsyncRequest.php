<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutoResourceOptimizeRulesAsyncRequest extends Model
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
     * >  Set this parameter to a JSON array that consists of multiple instance IDs. Separate instance IDs with commas (,). Example: `[\\"Instance ID1\\", \\"Instance ID2\\"]`.
     *
     * This parameter is required.
     *
     * @example [\\"rm-2ze8g2am97624****\\",\\"rm-2ze9xrhze0709****\\"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The ID of the asynchronous request.
     *
     * >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     *
     * @example async__507044db6c4eadfa2dab9b084e80****
     *
     * @var string
     */
    public $resultId;

    /**
     * @description The fragmentation rate that triggers automatic fragment recycling of a single physical table. Valid values: **0.10** to **0.99**.
     *
     * This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $tableFragmentationRatio;

    /**
     * @description The minimum storage usage that triggers automatic fragment recycling of a single physical table. Valid values: **5** to **100**. Unit: GB.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var float
     */
    public $tableSpaceSize;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceIds' => 'InstanceIds',
        'resultId' => 'ResultId',
        'tableFragmentationRatio' => 'TableFragmentationRatio',
        'tableSpaceSize' => 'TableSpaceSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }
        if (null !== $this->tableFragmentationRatio) {
            $res['TableFragmentationRatio'] = $this->tableFragmentationRatio;
        }
        if (null !== $this->tableSpaceSize) {
            $res['TableSpaceSize'] = $this->tableSpaceSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAutoResourceOptimizeRulesAsyncRequest
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
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }
        if (isset($map['TableFragmentationRatio'])) {
            $model->tableFragmentationRatio = $map['TableFragmentationRatio'];
        }
        if (isset($map['TableSpaceSize'])) {
            $model->tableSpaceSize = $map['TableSpaceSize'];
        }

        return $model;
    }
}
