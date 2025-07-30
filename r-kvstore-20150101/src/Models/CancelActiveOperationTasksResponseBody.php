<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CancelActiveOperationTasksResponseBody extends Model
{
    /**
     * @description The IDs of O\\&M events that are canceled at a time. Separate multiple IDs with commas (,).
     *
     * @example 1508850,1508310,1507849,1506274
     *
     * @var string
     */
    public $ids;

    /**
     * @description The request ID.
     *
     * @example F16A51B0-436E-5B84-8326-A18AA150D1C4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ids' => 'Ids',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return CancelActiveOperationTasksResponseBody
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
