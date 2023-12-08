<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponseBody\DBClusterAccessWhiteList;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAccessWhiteListResponseBody extends Model
{
    /**
     * @var DBClusterAccessWhiteList
     */
    public $DBClusterAccessWhiteList;

    /**
     * @example 905F13A4-5097-4897-A84D-527EC75FFF4F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterAccessWhiteList' => 'DBClusterAccessWhiteList',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterAccessWhiteList) {
            $res['DBClusterAccessWhiteList'] = null !== $this->DBClusterAccessWhiteList ? $this->DBClusterAccessWhiteList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAccessWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterAccessWhiteList'])) {
            $model->DBClusterAccessWhiteList = DBClusterAccessWhiteList::fromMap($map['DBClusterAccessWhiteList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
