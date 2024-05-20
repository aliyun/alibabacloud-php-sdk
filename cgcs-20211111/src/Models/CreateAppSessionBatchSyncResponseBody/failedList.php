<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody\failedList\failedInfo;
use AlibabaCloud\Tea\Model;

class failedList extends Model
{
    /**
     * @example 100****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1ADE0****
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @var failedInfo
     */
    public $failedInfo;
    protected $_name = [
        'appId'           => 'AppId',
        'customSessionId' => 'CustomSessionId',
        'failedInfo'      => 'FailedInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->failedInfo) {
            $res['FailedInfo'] = null !== $this->failedInfo ? $this->failedInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['FailedInfo'])) {
            $model->failedInfo = failedInfo::fromMap($map['FailedInfo']);
        }

        return $model;
    }
}
