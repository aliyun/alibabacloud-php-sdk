<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RunClusterInspectResponseBody extends Model
{
    /**
     * @description The inspection report ID.
     *
     * @example 5d6557c983064c45bed62ab2a2119cc7
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The request ID.
     *
     * @example 0AB4D067-4DD7-5471-B90A-FCC564BC3337
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The inspection task ID.
     *
     * @example T-67d7ec016ce37c0106000***
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'reportId' => 'reportId',
        'requestId' => 'requestId',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterInspectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
