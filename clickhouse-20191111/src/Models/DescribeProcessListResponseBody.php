<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;
use AlibabaCloud\Tea\Model;

class DescribeProcessListResponseBody extends Model
{
    /**
     * @description The queries.
     *
     * @var processList
     */
    public $processList;

    /**
     * @description The request ID.
     *
     * @example FD61BB0D-788A-5185-A8E3-1B90BA8F6F04
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processList' => 'ProcessList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processList) {
            $res['ProcessList'] = null !== $this->processList ? $this->processList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessList'])) {
            $model->processList = processList::fromMap($map['ProcessList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
