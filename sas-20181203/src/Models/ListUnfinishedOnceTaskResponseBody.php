<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody\onceTasks;
use AlibabaCloud\Tea\Model;

class ListUnfinishedOnceTaskResponseBody extends Model
{
    /**
     * @var onceTasks[]
     */
    public $onceTasks;

    /**
     * @example F5CF78A7-30AA-59DB-847F-13EE3AE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onceTasks' => 'OnceTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onceTasks) {
            $res['OnceTasks'] = [];
            if (null !== $this->onceTasks && \is_array($this->onceTasks)) {
                $n = 0;
                foreach ($this->onceTasks as $item) {
                    $res['OnceTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUnfinishedOnceTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnceTasks'])) {
            if (!empty($map['OnceTasks'])) {
                $model->onceTasks = [];
                $n                = 0;
                foreach ($map['OnceTasks'] as $item) {
                    $model->onceTasks[$n++] = null !== $item ? onceTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
