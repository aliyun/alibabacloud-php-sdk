<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFacerecogJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var facerecogJobList
     */
    public $facerecogJobList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'nonExistIds'      => 'NonExistIds',
        'facerecogJobList' => 'FacerecogJobList',
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
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->facerecogJobList) {
            $res['FacerecogJobList'] = null !== $this->facerecogJobList ? $this->facerecogJobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFacerecogJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['FacerecogJobList'])) {
            $model->facerecogJobList = facerecogJobList::fromMap($map['FacerecogJobList']);
        }

        return $model;
    }
}
