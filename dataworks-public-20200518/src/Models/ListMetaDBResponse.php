<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse\databaseInfo;
use AlibabaCloud\Tea\Model;

class ListMetaDBResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var databaseInfo
     */
    public $databaseInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'databaseInfo' => 'DatabaseInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('databaseInfo', $this->databaseInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetaDBResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DatabaseInfo'])) {
            $model->databaseInfo = databaseInfo::fromMap($map['DatabaseInfo']);
        }

        return $model;
    }
}
