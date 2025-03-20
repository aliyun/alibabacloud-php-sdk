<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest\taskInstances\dataSource;
use AlibabaCloud\Tea\Model;

class taskInstances extends Model
{
    /**
     * @description The information about the associated data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The priority of the instance. Valid values: 1, 3, 5, 7, and 8.
     *
     * A larger value indicates a higher priority. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The resource group information. Set this parameter to the ID of a resource group for scheduling.
     *
     * @example S_res_group_524258031846018_1684XXXXXXXXX
     *
     * @var string
     */
    public $runtimeResource;
    protected $_name = [
        'dataSource' => 'DataSource',
        'id' => 'Id',
        'priority' => 'Priority',
        'runtimeResource' => 'RuntimeResource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = $this->runtimeResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = $map['RuntimeResource'];
        }

        return $model;
    }
}
