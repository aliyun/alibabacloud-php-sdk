<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainOverviewResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxHttps;

    /**
     * @var int
     */
    public $maxHttp;
    protected $_name = [
        'requestId' => 'RequestId',
        'maxHttps'  => 'MaxHttps',
        'maxHttp'   => 'MaxHttp',
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
        if (null !== $this->maxHttps) {
            $res['MaxHttps'] = $this->maxHttps;
        }
        if (null !== $this->maxHttp) {
            $res['MaxHttp'] = $this->maxHttp;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxHttps'])) {
            $model->maxHttps = $map['MaxHttps'];
        }
        if (isset($map['MaxHttp'])) {
            $model->maxHttp = $map['MaxHttp'];
        }

        return $model;
    }
}
