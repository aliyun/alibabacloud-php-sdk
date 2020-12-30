<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class MoveAppResourceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedResourceIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $nonExistResourceIds;
    protected $_name = [
        'failedResourceIds'   => 'FailedResourceIds',
        'requestId'           => 'RequestId',
        'nonExistResourceIds' => 'NonExistResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResourceIds) {
            $res['FailedResourceIds'] = $this->failedResourceIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistResourceIds) {
            $res['NonExistResourceIds'] = $this->nonExistResourceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAppResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResourceIds'])) {
            if (!empty($map['FailedResourceIds'])) {
                $model->failedResourceIds = $map['FailedResourceIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistResourceIds'])) {
            if (!empty($map['NonExistResourceIds'])) {
                $model->nonExistResourceIds = $map['NonExistResourceIds'];
            }
        }

        return $model;
    }
}
