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
     * @var string[]
     */
    public $nonExistResourceIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedResourceIds'   => 'FailedResourceIds',
        'nonExistResourceIds' => 'NonExistResourceIds',
        'requestId'           => 'RequestId',
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
        if (null !== $this->nonExistResourceIds) {
            $res['NonExistResourceIds'] = $this->nonExistResourceIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NonExistResourceIds'])) {
            if (!empty($map['NonExistResourceIds'])) {
                $model->nonExistResourceIds = $map['NonExistResourceIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
