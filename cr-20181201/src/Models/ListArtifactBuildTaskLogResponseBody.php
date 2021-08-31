<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponseBody\buildTaskLogs;
use AlibabaCloud\Tea\Model;

class ListArtifactBuildTaskLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var buildTaskLogs[]
     */
    public $buildTaskLogs;
    protected $_name = [
        'code'          => 'Code',
        'isSuccess'     => 'IsSuccess',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'buildTaskLogs' => 'BuildTaskLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->buildTaskLogs) {
            $res['BuildTaskLogs'] = [];
            if (null !== $this->buildTaskLogs && \is_array($this->buildTaskLogs)) {
                $n = 0;
                foreach ($this->buildTaskLogs as $item) {
                    $res['BuildTaskLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BuildTaskLogs'])) {
            if (!empty($map['BuildTaskLogs'])) {
                $model->buildTaskLogs = [];
                $n                    = 0;
                foreach ($map['BuildTaskLogs'] as $item) {
                    $model->buildTaskLogs[$n++] = null !== $item ? buildTaskLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
