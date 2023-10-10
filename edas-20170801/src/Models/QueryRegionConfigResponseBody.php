<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody\regionConfig;
use AlibabaCloud\Tea\Model;

class QueryRegionConfigResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The information about region configurations.
     *
     * @var regionConfig
     */
    public $regionConfig;

    /**
     * @description The ID of the request.
     *
     * @example b197-40ab-9155-7ca7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'regionConfig' => 'RegionConfig',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionConfig) {
            $res['RegionConfig'] = null !== $this->regionConfig ? $this->regionConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionConfig'])) {
            $model->regionConfig = regionConfig::fromMap($map['RegionConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
