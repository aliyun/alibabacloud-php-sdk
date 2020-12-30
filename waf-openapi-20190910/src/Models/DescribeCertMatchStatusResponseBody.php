<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertMatchStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $matchStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'matchStatus' => 'MatchStatus',
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
        if (null !== $this->matchStatus) {
            $res['MatchStatus'] = $this->matchStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertMatchStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MatchStatus'])) {
            $model->matchStatus = $map['MatchStatus'];
        }

        return $model;
    }
}
