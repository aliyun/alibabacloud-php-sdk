<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponseBody\DBClusterAccessWhiteList;

class DescribeDBClusterAccessWhiteListResponseBody extends Model
{
    /**
     * @var DBClusterAccessWhiteList
     */
    public $DBClusterAccessWhiteList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterAccessWhiteList' => 'DBClusterAccessWhiteList',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBClusterAccessWhiteList) {
            $this->DBClusterAccessWhiteList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterAccessWhiteList) {
            $res['DBClusterAccessWhiteList'] = null !== $this->DBClusterAccessWhiteList ? $this->DBClusterAccessWhiteList->toArray($noStream) : $this->DBClusterAccessWhiteList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClusterAccessWhiteList'])) {
            $model->DBClusterAccessWhiteList = DBClusterAccessWhiteList::fromMap($map['DBClusterAccessWhiteList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
