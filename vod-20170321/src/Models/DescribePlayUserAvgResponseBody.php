<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs;
use AlibabaCloud\Tea\Model;

class DescribePlayUserAvgResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userPlayStatisAvgs
     */
    public $userPlayStatisAvgs;
    protected $_name = [
        'requestId'          => 'RequestId',
        'userPlayStatisAvgs' => 'UserPlayStatisAvgs',
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
        if (null !== $this->userPlayStatisAvgs) {
            $res['UserPlayStatisAvgs'] = null !== $this->userPlayStatisAvgs ? $this->userPlayStatisAvgs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayUserAvgResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserPlayStatisAvgs'])) {
            $model->userPlayStatisAvgs = userPlayStatisAvgs::fromMap($map['UserPlayStatisAvgs']);
        }

        return $model;
    }
}
