<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFacerecogJobListResponseBody extends Model
{
    /**
     * @var facerecogJobList
     */
    public $facerecogJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'facerecogJobList' => 'FacerecogJobList',
        'nonExistIds'      => 'NonExistIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facerecogJobList) {
            $res['FacerecogJobList'] = null !== $this->facerecogJobList ? $this->facerecogJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FacerecogJobList'])) {
            $model->facerecogJobList = facerecogJobList::fromMap($map['FacerecogJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
