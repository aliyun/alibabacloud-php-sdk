<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody\regionConfig;
use AlibabaCloud\Tea\Model;

class QueryRegionConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var regionConfig
     */
    public $regionConfig;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'regionConfig' => 'RegionConfig',
        'code'         => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionConfig) {
            $res['RegionConfig'] = null !== $this->regionConfig ? $this->regionConfig->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRegionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionConfig'])) {
            $model->regionConfig = regionConfig::fromMap($map['RegionConfig']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
