<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddCustomLineResponseBody extends Model
{
    /**
     * @var int
     */
    public $lineId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lineCode;
    protected $_name = [
        'lineId'    => 'LineId',
        'requestId' => 'RequestId',
        'lineCode'  => 'LineCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        return $model;
    }
}
