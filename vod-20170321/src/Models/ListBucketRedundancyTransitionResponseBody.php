<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListBucketRedundancyTransitionResponseBody\redundancyTransitionInfo;

class ListBucketRedundancyTransitionResponseBody extends Model
{
    /**
     * @var redundancyTransitionInfo
     */
    public $redundancyTransitionInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $storageRedundancyType;
    protected $_name = [
        'redundancyTransitionInfo' => 'RedundancyTransitionInfo',
        'requestId' => 'RequestId',
        'storageRedundancyType' => 'StorageRedundancyType',
    ];

    public function validate()
    {
        if (null !== $this->redundancyTransitionInfo) {
            $this->redundancyTransitionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->redundancyTransitionInfo) {
            $res['RedundancyTransitionInfo'] = null !== $this->redundancyTransitionInfo ? $this->redundancyTransitionInfo->toArray($noStream) : $this->redundancyTransitionInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageRedundancyType) {
            $res['StorageRedundancyType'] = $this->storageRedundancyType;
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
        if (isset($map['RedundancyTransitionInfo'])) {
            $model->redundancyTransitionInfo = redundancyTransitionInfo::fromMap($map['RedundancyTransitionInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageRedundancyType'])) {
            $model->storageRedundancyType = $map['StorageRedundancyType'];
        }

        return $model;
    }
}
