<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckMaxYearOfServerLockResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxYear;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxYear'   => 'MaxYear',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxYear) {
            $res['MaxYear'] = $this->maxYear;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaxYear'])) {
            $model->maxYear = $map['MaxYear'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
