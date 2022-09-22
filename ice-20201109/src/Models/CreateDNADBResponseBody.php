<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBResponseBody\DBInfo;
use AlibabaCloud\Tea\Model;

class CreateDNADBResponseBody extends Model
{
    /**
     * @var DBInfo
     */
    public $DBInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInfo'    => 'DBInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInfo) {
            $res['DBInfo'] = null !== $this->DBInfo ? $this->DBInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDNADBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInfo'])) {
            $model->DBInfo = DBInfo::fromMap($map['DBInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
