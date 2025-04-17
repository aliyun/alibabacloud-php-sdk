<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs;

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
        'requestId' => 'RequestId',
        'userPlayStatisAvgs' => 'UserPlayStatisAvgs',
    ];

    public function validate()
    {
        if (null !== $this->userPlayStatisAvgs) {
            $this->userPlayStatisAvgs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userPlayStatisAvgs) {
            $res['UserPlayStatisAvgs'] = null !== $this->userPlayStatisAvgs ? $this->userPlayStatisAvgs->toArray($noStream) : $this->userPlayStatisAvgs;
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

        if (isset($map['UserPlayStatisAvgs'])) {
            $model->userPlayStatisAvgs = userPlayStatisAvgs::fromMap($map['UserPlayStatisAvgs']);
        }

        return $model;
    }
}
