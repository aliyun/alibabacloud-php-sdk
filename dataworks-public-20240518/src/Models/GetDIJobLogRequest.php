<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobLogRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 10000
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The failover ID.
     *
     * @example 10
     *
     * @var int
     */
    public $failoverId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 10000
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example 6153616438
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Node type. Currently, it is only applicable in the view resource group 2.0 task:
     *
     * - MASTER: obtains logs of JobManager.
     * - WORKER: obtains logs of TaskManager.
     *
     * @example MASTER
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The page number of the pagination query. The value is a positive integer greater than or equal to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'failoverId' => 'FailoverId',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'nodeType' => 'NodeType',
        'pageNumber' => 'PageNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->failoverId) {
            $res['FailoverId'] = $this->failoverId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['FailoverId'])) {
            $model->failoverId = $map['FailoverId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
