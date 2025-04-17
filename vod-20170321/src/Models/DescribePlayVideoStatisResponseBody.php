<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;

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
        'requestId' => 'RequestId',
        'videoPlayStatisDetails' => 'VideoPlayStatisDetails',
    ];

    public function validate()
    {
        if (null !== $this->videoPlayStatisDetails) {
            $this->videoPlayStatisDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->videoPlayStatisDetails) {
            $res['VideoPlayStatisDetails'] = null !== $this->videoPlayStatisDetails ? $this->videoPlayStatisDetails->toArray($noStream) : $this->videoPlayStatisDetails;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
