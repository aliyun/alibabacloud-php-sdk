<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainSunriseClaimResponseBody extends Model
{
    /**
     * @example 2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001
     *
     * @var string
     */
    public $claimKey;

    /**
     * @example BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $result;
    protected $_name = [
        'claimKey'  => 'ClaimKey',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->claimKey) {
            $res['ClaimKey'] = $this->claimKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDomainSunriseClaimResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClaimKey'])) {
            $model->claimKey = $map['ClaimKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
