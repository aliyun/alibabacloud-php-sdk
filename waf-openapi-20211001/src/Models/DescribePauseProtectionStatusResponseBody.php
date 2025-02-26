<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribePauseProtectionStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $pauseStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pauseStatus' => 'PauseStatus',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pauseStatus) {
            $res['PauseStatus'] = $this->pauseStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PauseStatus'])) {
            $model->pauseStatus = $map['PauseStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
