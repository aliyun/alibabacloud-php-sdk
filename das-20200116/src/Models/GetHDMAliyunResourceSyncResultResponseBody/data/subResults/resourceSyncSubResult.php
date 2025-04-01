<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponseBody\data\subResults;

use AlibabaCloud\Dara\Model;

class resourceSyncSubResult extends Model
{
    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $syncCount;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'resourceType' => 'ResourceType',
        'success' => 'Success',
        'syncCount' => 'SyncCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->syncCount) {
            $res['SyncCount'] = $this->syncCount;
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
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['SyncCount'])) {
            $model->syncCount = $map['SyncCount'];
        }

        return $model;
    }
}
