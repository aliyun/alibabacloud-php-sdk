<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CountProjectsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $projectCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'projectCount' => 'ProjectCount',
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
        if (null !== $this->projectCount) {
            $res['ProjectCount'] = $this->projectCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountProjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectCount'])) {
            $model->projectCount = $map['ProjectCount'];
        }

        return $model;
    }
}
