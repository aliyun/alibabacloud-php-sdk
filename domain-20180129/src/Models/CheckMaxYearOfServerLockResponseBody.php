<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckMaxYearOfServerLockResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxYear;
    protected $_name = [
        'requestId' => 'RequestId',
        'maxYear'   => 'MaxYear',
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
        if (null !== $this->maxYear) {
            $res['MaxYear'] = $this->maxYear;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMaxYearOfServerLockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxYear'])) {
            $model->maxYear = $map['MaxYear'];
        }

        return $model;
    }
}
