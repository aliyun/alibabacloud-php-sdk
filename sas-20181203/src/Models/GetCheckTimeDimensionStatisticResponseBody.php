<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO;

class GetCheckTimeDimensionStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeDimensionStatisticDTO
     */
    public $timeDimensionStatisticDTO;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeDimensionStatisticDTO' => 'TimeDimensionStatisticDTO',
    ];

    public function validate()
    {
        if (null !== $this->timeDimensionStatisticDTO) {
            $this->timeDimensionStatisticDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeDimensionStatisticDTO) {
            $res['TimeDimensionStatisticDTO'] = null !== $this->timeDimensionStatisticDTO ? $this->timeDimensionStatisticDTO->toArray($noStream) : $this->timeDimensionStatisticDTO;
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

        if (isset($map['TimeDimensionStatisticDTO'])) {
            $model->timeDimensionStatisticDTO = timeDimensionStatisticDTO::fromMap($map['TimeDimensionStatisticDTO']);
        }

        return $model;
    }
}
