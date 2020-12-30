<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoResponseBody\userSubmissionList;
use AlibabaCloud\Tea\Model;

class GetUserSubmissionStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userSubmissionList
     */
    public $userSubmissionList;
    protected $_name = [
        'requestId'          => 'RequestId',
        'userSubmissionList' => 'UserSubmissionList',
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
        if (null !== $this->userSubmissionList) {
            $res['UserSubmissionList'] = null !== $this->userSubmissionList ? $this->userSubmissionList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserSubmissionStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserSubmissionList'])) {
            $model->userSubmissionList = userSubmissionList::fromMap($map['UserSubmissionList']);
        }

        return $model;
    }
}
