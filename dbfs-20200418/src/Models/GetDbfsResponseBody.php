<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo;
use AlibabaCloud\Tea\Model;

class GetDbfsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBFSInfo
     */
    public $DBFSInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'DBFSInfo'  => 'DBFSInfo',
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
        if (null !== $this->DBFSInfo) {
            $res['DBFSInfo'] = null !== $this->DBFSInfo ? $this->DBFSInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDbfsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBFSInfo'])) {
            $model->DBFSInfo = DBFSInfo::fromMap($map['DBFSInfo']);
        }

        return $model;
    }
}
