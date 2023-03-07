<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationResultsRequest\instance;
use AlibabaCloud\Tea\Model;

class ListInvocationResultsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the command.
     *
     * You can call the [ListCommands](~~87388~~) operation to query the command ID.
     * @example c-hz01v8x80o3****
     *
     * @var string
     */
    public $commandId;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @description The status of the command that you want to query. Valid values:
     *
     *   Finished
     *   Running
     *   Failed
     *   Stopped
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'commandId'          => 'CommandId',
        'instance'           => 'Instance',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvocationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n               = 0;
                foreach ($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
