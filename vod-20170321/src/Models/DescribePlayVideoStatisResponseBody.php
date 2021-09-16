<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;
use AlibabaCloud\Tea\Model;

class DescribePlayVideoStatisResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoPlayStatisDetails
     */
    public $videoPlayStatisDetails;
    protected $_name = [
        'requestId'              => 'RequestId',
        'videoPlayStatisDetails' => 'VideoPlayStatisDetails',
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
        if (null !== $this->videoPlayStatisDetails) {
            $res['VideoPlayStatisDetails'] = null !== $this->videoPlayStatisDetails ? $this->videoPlayStatisDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayVideoStatisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoPlayStatisDetails'])) {
            $model->videoPlayStatisDetails = videoPlayStatisDetails::fromMap($map['VideoPlayStatisDetails']);
        }

        return $model;
    }
}
