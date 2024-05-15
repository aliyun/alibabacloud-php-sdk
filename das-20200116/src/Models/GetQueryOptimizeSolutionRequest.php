<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeSolutionRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PolarDBMySQL**
     *   **PostgreSQL**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance ID. You can call the [GetQueryOptimizeDataStats](https://help.aliyun.com/document_detail/405261.html) operation to query the instance ID.
     *
     * @example rm-bp1o3z6beqpej****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The tag ID. For more information, see [Query governance](https://help.aliyun.com/document_detail/290038.html).
     *
     * This parameter is required.
     * @example LARGE_ROWS_EXAMINED
     *
     * @var string
     */
    public $ruleIds;

    /**
     * @description The SQL template ID. You can call the [GetQueryOptimizeDataStats](https://help.aliyun.com/document_detail/405261.html) operation to query the SQL template ID.
     *
     * This parameter is required.
     * @example 05fecf7e7b3efd123c4d5197035f****
     *
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'ruleIds'    => 'RuleIds',
        'sqlId'      => 'SqlId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeSolutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        return $model;
    }
}
