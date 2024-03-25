<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class MigrateImageProtocolResponseBody extends Model
{
    /**
     * @description The IDs of images whose protocols fail to be migrated.
     *
     * @var string[]
     */
    public $failedIds;

    /**
     * @description The request ID.
     *
     * @example 4D4E5AF5-DF28-5FE7-85C7-9F98315B****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedIds' => 'FailedIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedIds) {
            $res['FailedIds'] = $this->failedIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateImageProtocolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedIds'])) {
            if (!empty($map['FailedIds'])) {
                $model->failedIds = $map['FailedIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
