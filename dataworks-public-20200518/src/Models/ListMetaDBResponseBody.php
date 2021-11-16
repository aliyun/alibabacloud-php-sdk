<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo;
use AlibabaCloud\Tea\Model;

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
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetaDBResponseBody
     */
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
