<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RefreshDBClusterStorageUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $usedStorage;

    /**
     * @var string
     */
    public $usedStorageModified;
    protected $_name = [
        'DBClusterId'         => 'DBClusterId',
        'requestId'           => 'RequestId',
        'usedStorage'         => 'UsedStorage',
        'usedStorageModified' => 'UsedStorageModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usedStorage) {
            $res['UsedStorage'] = $this->usedStorage;
        }
        if (null !== $this->usedStorageModified) {
            $res['UsedStorageModified'] = $this->usedStorageModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshDBClusterStorageUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsedStorage'])) {
            $model->usedStorage = $map['UsedStorage'];
        }
        if (isset($map['UsedStorageModified'])) {
            $model->usedStorageModified = $map['UsedStorageModified'];
        }

        return $model;
    }
}
