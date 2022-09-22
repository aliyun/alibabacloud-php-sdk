<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaProducingJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $ignoreList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ignoreList' => 'IgnoreList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreList) {
            $res['IgnoreList'] = $this->ignoreList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMediaProducingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreList'])) {
            $model->ignoreList = $map['IgnoreList'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
