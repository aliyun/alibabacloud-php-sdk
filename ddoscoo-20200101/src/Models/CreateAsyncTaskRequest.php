<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateAsyncTaskRequest extends Model
{
    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The details of the asynchronous export task. The value is a JSON string. The field in the value varies with **TaskType**.
     *
     * If **TaskType** is set to **1**, **3**, **4**, **5**, or **6**, the following filed is returned:
     *
     *   **instanceId**: the ID of the instance. This field is required and must be of the STRING type.
     *
     * If **TaskType** is set to **2**, the following field is returned:
     *
     *   **domain**: the domain name of the website, which must be of the STRING type. If you do not specify this field, the forwarding rules of all websites are exported.
     *
     * @example {"instanceId": "ddoscoo-cn-mp91j1ao****"}
     *
     * @var string
     */
    public $taskParams;

    /**
     * @description The type of the asynchronous export task that you want to create. Valid values:
     *
     *   **1**: the task to export the port forwarding rules of an instance
     *   **2**: the task to export the forwarding rules of a website protected by an instance
     *   **3**: the task to export the session persistence and health check settings of an instance
     *   **4**: the task to export the anti-DDoS mitigation policies of an instance
     *   **5**: the task to download the blacklist for destination IP addresses of an instance
     *   **6**: the task to download the whitelist for destination IP addresses of an instance
     *
     * @example 5
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'taskParams'      => 'TaskParams',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
