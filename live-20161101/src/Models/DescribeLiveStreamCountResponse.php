<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamCountResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamCountInfos
     */
    public $streamCountInfos;
    protected $_name = [
        'requestId'        => 'RequestId',
        'streamCountInfos' => 'StreamCountInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('streamCountInfos', $this->streamCountInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamCountInfos) {
            $res['StreamCountInfos'] = null !== $this->streamCountInfos ? $this->streamCountInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamCountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamCountInfos'])) {
            $model->streamCountInfos = streamCountInfos::fromMap($map['StreamCountInfos']);
        }

        return $model;
    }
}
