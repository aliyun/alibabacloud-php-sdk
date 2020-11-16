<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponse\syncGroups;
use AlibabaCloud\Tea\Model;

class DescribeCasterSyncGroupResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var syncGroups
     */
    public $syncGroups;
    protected $_name = [
        'requestId'  => 'RequestId',
        'casterId'   => 'CasterId',
        'syncGroups' => 'SyncGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('syncGroups', $this->syncGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->syncGroups) {
            $res['SyncGroups'] = null !== $this->syncGroups ? $this->syncGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterSyncGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['SyncGroups'])) {
            $model->syncGroups = syncGroups::fromMap($map['SyncGroups']);
        }

        return $model;
    }
}
