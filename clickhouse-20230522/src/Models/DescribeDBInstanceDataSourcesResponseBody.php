<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDataSourcesResponseBody extends Model
{
    /**
     * @description The returned result.
     *
     * @var data
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example F543E6CC-6868-523D-8D28-0E92CF977ED2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceDataSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
