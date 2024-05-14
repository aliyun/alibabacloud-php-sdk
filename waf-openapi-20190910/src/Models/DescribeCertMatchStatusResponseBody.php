<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertMatchStatusResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $matchStatus;

    /**
     * @example D7861F61-5B61-46CE-A47C-6B19160D5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'matchStatus' => 'MatchStatus',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchStatus) {
            $res['MatchStatus'] = $this->matchStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MatchStatus'])) {
            $model->matchStatus = $map['MatchStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
