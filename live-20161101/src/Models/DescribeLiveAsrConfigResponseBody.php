<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAsrConfigResponseBody\liveAsrConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveAsrConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveAsrConfig
     */
    public $liveAsrConfig;
    protected $_name = [
        'requestId'     => 'RequestId',
        'liveAsrConfig' => 'LiveAsrConfig',
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
        if (null !== $this->liveAsrConfig) {
            $res['LiveAsrConfig'] = null !== $this->liveAsrConfig ? $this->liveAsrConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAsrConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveAsrConfig'])) {
            $model->liveAsrConfig = liveAsrConfig::fromMap($map['LiveAsrConfig']);
        }

        return $model;
    }
}
