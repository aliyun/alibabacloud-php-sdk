<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo;

class ListMetaDBResponseBody extends Model
{
    /**
     * @var databaseInfo
     */
    public $databaseInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databaseInfo' => 'DatabaseInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->databaseInfo) {
            $this->databaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toArray($noStream) : $this->databaseInfo;
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
        if (isset($map['DatabaseInfo'])) {
            $model->databaseInfo = databaseInfo::fromMap($map['DatabaseInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
