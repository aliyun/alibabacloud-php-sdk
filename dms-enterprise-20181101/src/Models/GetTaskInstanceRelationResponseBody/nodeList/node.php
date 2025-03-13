<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponseBody\nodeList;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The business time of the node.
     *
     * @example 2021-11-09 14:37:26
     *
     * @var string
     */
    public $businessTime;

    /**
     * @description The time when the execution of the task flow was complete. The time is displayed in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2021-11-11 14:38:57
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The amount of time consumed for running the node. Unit: milliseconds.
     *
     * @example 170655
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The ID of the execution record of the task flow.
     *
     * @example 14059
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the node.
     *
     * @example 14059
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example Spark SQL-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the node. For more information about the valid values for this parameter, see [NodeType parameter](https://help.aliyun.com/document_detail/424705.html).
     *
     * @example 36
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The status of the node. Valid values:
     *
     *   **0**: The node is waiting to be scheduled.
     *   **1**: The node is running.
     *   **2**: The node is suspended.
     *   **3**: The node failed to run.
     *   **4**: The node is run.
     *   **5**: The node is complete.
     *
     * @example 4
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'businessTime' => 'BusinessTime',
        'endTime' => 'EndTime',
        'executeTime' => 'ExecuteTime',
        'id' => 'Id',
        'message' => 'Message',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
        'status' => 'Status',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
