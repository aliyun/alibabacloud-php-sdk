<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo;
use AlibabaCloud\Tea\Model;

class GetDbfsResponseBody extends Model
{
    /**
     * @var DBFSInfo
     */
    public $DBFSInfo;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBFSInfo'  => 'DBFSInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBFSInfo) {
            $res['DBFSInfo'] = null !== $this->DBFSInfo ? $this->DBFSInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBFSInfo'])) {
            $model->DBFSInfo = DBFSInfo::fromMap($map['DBFSInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
