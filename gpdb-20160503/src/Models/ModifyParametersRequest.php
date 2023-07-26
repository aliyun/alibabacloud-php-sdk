<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyParametersRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to forcibly restart the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $forceRestartInstance;

    /**
     * @description The name and value of the parameter to be modified. Specify the parameter in the `<Parameter name>:<Parameter value>` format.
     *
     * You can call the [DescribeParameters](~~208310~~) operation to query the parameters that can be modified.
     * @example {"statement_timeout":"11800010"}
     *
     * @var string
     */
    public $parameters;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'forceRestartInstance' => 'ForceRestartInstance',
        'parameters'           => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->forceRestartInstance) {
            $res['ForceRestartInstance'] = $this->forceRestartInstance;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ForceRestartInstance'])) {
            $model->forceRestartInstance = $map['ForceRestartInstance'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
