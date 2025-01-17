<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSupervisonInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $latestScanTime;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'latestScanTime' => 'LatestScanTime',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestScanTime) {
            $res['LatestScanTime'] = $this->latestScanTime;
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
        if (isset($map['LatestScanTime'])) {
            $model->latestScanTime = $map['LatestScanTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
