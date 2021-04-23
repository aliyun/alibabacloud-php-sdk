<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponseBody\syncGroups;
use AlibabaCloud\Tea\Model;

class DescribeCasterSyncGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var syncGroups
     */
    public $syncGroups;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'syncGroups' => 'SyncGroups',
        'casterId'   => 'CasterId',
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
        if (null !== $this->syncGroups) {
            $res['SyncGroups'] = null !== $this->syncGroups ? $this->syncGroups->toMap() : null;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterSyncGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SyncGroups'])) {
            $model->syncGroups = syncGroups::fromMap($map['SyncGroups']);
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
