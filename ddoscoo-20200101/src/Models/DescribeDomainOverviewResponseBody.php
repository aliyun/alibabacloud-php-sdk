<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainOverviewResponseBody extends Model
{
    /**
     * @description The peak queries per second (QPS) during HTTP traffic scrubbing. Unit: QPS.
     *
     * @example 41652
     *
     * @var int
     */
    public $maxHttp;

    /**
     * @description The peak QPS during HTTPS traffic scrubbing. Unit: QPS.
     *
     * @example 0
     *
     * @var int
     */
    public $maxHttps;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxHttp'   => 'MaxHttp',
        'maxHttps'  => 'MaxHttps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxHttp) {
            $res['MaxHttp'] = $this->maxHttp;
        }
        if (null !== $this->maxHttps) {
            $res['MaxHttps'] = $this->maxHttps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxHttp'])) {
            $model->maxHttp = $map['MaxHttp'];
        }
        if (isset($map['MaxHttps'])) {
            $model->maxHttps = $map['MaxHttps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
