<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateTimePeriodResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timePeriodId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'timePeriodId' => 'TimePeriodId',
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
        if (null !== $this->timePeriodId) {
            $res['TimePeriodId'] = $this->timePeriodId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTimePeriodResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimePeriodId'])) {
            $model->timePeriodId = $map['TimePeriodId'];
        }

        return $model;
    }
}
