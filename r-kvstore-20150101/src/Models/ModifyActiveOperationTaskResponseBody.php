<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTaskResponseBody extends Model
{
    /**
     * @description The scheduled switchover time to be specified. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  The time cannot be later than the latest operation time. You can call the [DescribeActiveOperationTask](~~197387~~) operation. The **Deadline** parameter in the response indicates the latest operation time.
     * @example 11111,22222
     *
     * @var string
     */
    public $ids;

    /**
     * @description Modifies the scheduled switchover time of an operations and maintenance (O&M) task.
     *
     * @example 5D622714-AEDD-4609-9167-F5DDD3D1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ids'       => 'Ids',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
