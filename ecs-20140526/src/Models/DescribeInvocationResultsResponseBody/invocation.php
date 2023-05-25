<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The ID of the instance
     *
     * @var invocationResults
     */
    public $invocationResults;

    /**
     * @description The number of times that the command is run on the instance.
     *
     *   If the command is set to run only once on the instance, the value is 0 or 1.
     *   If the command is set to run on a schedule on the instance, the value is the number of times that the command is run.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The execution state on a single instance. Valid values:
     *
     *   Pending: The command is being verified or sent.
     *
     *   Invalid: The specified command type or parameter is invalid.
     *
     *   Aborted: The command failed to be sent. To send a command to an instance, make sure that the instance is in the Running state and the command is sent to the instance within 1 minute.
     *
     *   Running: The command is being run on the instance.
     *
     *   Success:
     *
     *   Command that is set to run only once: The execution is complete, and the exit code is 0.
     *   Command that is set to run on a schedule: The last execution succeeds, the exit code is 0, and the specified cycle ends.
     *
     *   Failed:
     *
     *   Command that is set to run only once: The execution is complete, but the exit code is not 0.
     *   Command that is set to run on a schedule: The last execution is complete, the exit code is not 0, and the specified cycle is about to end.
     *
     *   Error: The execution cannot proceed due to an exception.
     *
     *   Timeout: The execution times out.
     *
     *   Cancelled: The execution is canceled, and the command is not run.
     *
     *   Stopping: The running command is being stopped.
     *
     *   Terminated: The command is terminated while it is being run.
     *
     *   Scheduled:
     *
     *   Command that is set to run only once: The command is not applicable.
     *   Command that is set to run on a schedule: The command is waiting to be run.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the command.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'invocationResults' => 'InvocationResults',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationResults) {
            $res['InvocationResults'] = null !== $this->invocationResults ? $this->invocationResults->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationResults'])) {
            $model->invocationResults = invocationResults::fromMap($map['InvocationResults']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
