<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;
use AlibabaCloud\Tea\Model;

class DescribeProcessListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var processList
     */
    public $processList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'processList' => 'ProcessList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->processList) {
            $res['ProcessList'] = null !== $this->processList ? $this->processList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProcessList'])) {
            $model->processList = processList::fromMap($map['ProcessList']);
        }

        return $model;
    }
}
