<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeStsGrantStatusResponseBody\stsGrant;
use AlibabaCloud\Tea\Model;

class DescribeStsGrantStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The authorization status of Anti-DDoS Pro or Anti-DDoS Premium.
     *
     * @var stsGrant
     */
    public $stsGrant;
    protected $_name = [
        'requestId' => 'RequestId',
        'stsGrant'  => 'StsGrant',
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
        if (null !== $this->stsGrant) {
            $res['StsGrant'] = null !== $this->stsGrant ? $this->stsGrant->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStsGrantStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StsGrant'])) {
            $model->stsGrant = stsGrant::fromMap($map['StsGrant']);
        }

        return $model;
    }
}
