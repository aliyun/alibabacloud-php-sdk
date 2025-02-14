<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO;

class GetCheckCountStatisticResponseBody extends Model
{
    /**
     * @var checkCountStatisticDTO
     */
    public $checkCountStatisticDTO;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkCountStatisticDTO' => 'CheckCountStatisticDTO',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkCountStatisticDTO) {
            $this->checkCountStatisticDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkCountStatisticDTO) {
            $res['CheckCountStatisticDTO'] = null !== $this->checkCountStatisticDTO ? $this->checkCountStatisticDTO->toArray($noStream) : $this->checkCountStatisticDTO;
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
        if (isset($map['CheckCountStatisticDTO'])) {
            $model->checkCountStatisticDTO = checkCountStatisticDTO::fromMap($map['CheckCountStatisticDTO']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
