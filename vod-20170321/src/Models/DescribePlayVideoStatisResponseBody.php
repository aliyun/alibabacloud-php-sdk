<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;
use AlibabaCloud\Tea\Model;

class DescribePlayVideoStatisResponseBody extends Model
{
    /**
     * @var videoPlayStatisDetails
     */
    public $videoPlayStatisDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'videoPlayStatisDetails' => 'VideoPlayStatisDetails',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoPlayStatisDetails) {
            $res['VideoPlayStatisDetails'] = null !== $this->videoPlayStatisDetails ? $this->videoPlayStatisDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['VideoPlayStatisDetails'])) {
            $model->videoPlayStatisDetails = videoPlayStatisDetails::fromMap($map['VideoPlayStatisDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
