<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponseBody\buildTaskLogs;

class ListArtifactBuildTaskLogResponseBody extends Model
{
    /**
     * @var buildTaskLogs[]
     */
    public $buildTaskLogs;

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
    protected $_name = [
        'buildTaskLogs' => 'BuildTaskLogs',
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->buildTaskLogs)) {
            Model::validateArray($this->buildTaskLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildTaskLogs) {
            if (\is_array($this->buildTaskLogs)) {
                $res['BuildTaskLogs'] = [];
                $n1 = 0;
                foreach ($this->buildTaskLogs as $item1) {
                    $res['BuildTaskLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskLogs'])) {
            if (!empty($map['BuildTaskLogs'])) {
                $model->buildTaskLogs = [];
                $n1 = 0;
                foreach ($map['BuildTaskLogs'] as $item1) {
                    $model->buildTaskLogs[$n1] = buildTaskLogs::fromMap($item1);
                    ++$n1;
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
