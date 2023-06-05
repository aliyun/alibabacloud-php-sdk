<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceHistoryResponseBody\instances;
use AlibabaCloud\Tea\Model;

class ListInstanceHistoryResponseBody extends Model
{
    /**
     * @description The status of the node that generates the instance. Valid values:
     *
     *   NOT_RUN: The node is not run.
     *   WAIT_TIME: The node is waiting for the scheduling time to arrive.
     *   WAIT_RESOURCE: The node is waiting for resources.
     *   RUNNING: The node is running.
     *   CHECKING: Data quality is being checked for the node.
     *   CHECKING_CONDITION: Branch conditions are being checked for the node.
     *   FAILURE: The node fails to be run.
     *   SUCCESS: The node is successfully run.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails.
     *
     * @example E6F0DBDD-5AD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The instance list.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'instances' => 'Instances',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
