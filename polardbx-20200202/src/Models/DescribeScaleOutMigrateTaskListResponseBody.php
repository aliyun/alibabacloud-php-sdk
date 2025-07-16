<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeScaleOutMigrateTaskListResponseBody extends Model
{
    /**
     * @example 32
     *
     * @var int
     */
    public $progress;

    /**
     * @example C458B1E8-1683-3645-B154-6BA32080EEA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'progress' => 'Progress',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScaleOutMigrateTaskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
