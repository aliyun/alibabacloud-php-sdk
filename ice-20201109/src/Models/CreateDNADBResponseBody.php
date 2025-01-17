<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBResponseBody\DBInfo;

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
        if (null !== $this->DBInfo) {
            $this->DBInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInfo) {
            $res['DBInfo'] = null !== $this->DBInfo ? $this->DBInfo->toArray($noStream) : $this->DBInfo;
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
        if (isset($map['DBInfo'])) {
            $model->DBInfo = DBInfo::fromMap($map['DBInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
