<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponseBody\buildTaskLogs;
use AlibabaCloud\Tea\Model;

class ListArtifactBuildTaskLogResponseBody extends Model
{
    /**
     * @description The log entries of the artifact build task.
     *
     * @var buildTaskLogs[]
     */
    public $buildTaskLogs;

    /**
     * @description The response code.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the API call is successful.
     *
     *   `true`: successful
     *   `false`: failed
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example C4C7DD0C-C9D6-437A-A7EE-121EFD70D002
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of log entries.
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'buildTaskLogs' => 'BuildTaskLogs',
        'code'          => 'Code',
        'isSuccess'     => 'IsSuccess',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskLogs) {
            $res['BuildTaskLogs'] = [];
            if (null !== $this->buildTaskLogs && \is_array($this->buildTaskLogs)) {
                $n = 0;
                foreach ($this->buildTaskLogs as $item) {
                    $res['BuildTaskLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactBuildTaskLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskLogs'])) {
            if (!empty($map['BuildTaskLogs'])) {
                $model->buildTaskLogs = [];
                $n                    = 0;
                foreach ($map['BuildTaskLogs'] as $item) {
                    $model->buildTaskLogs[$n++] = null !== $item ? buildTaskLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
