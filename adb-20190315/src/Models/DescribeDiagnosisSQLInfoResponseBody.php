<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $diagnosisSQLInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosisSQLInfo' => 'DiagnosisSQLInfo',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisSQLInfo) {
            $res['DiagnosisSQLInfo'] = $this->diagnosisSQLInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosisSQLInfo'])) {
            $model->diagnosisSQLInfo = $map['DiagnosisSQLInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
