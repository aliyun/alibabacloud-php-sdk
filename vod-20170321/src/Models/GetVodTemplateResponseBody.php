<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponseBody\vodTemplateInfo;
use AlibabaCloud\Tea\Model;

class GetVodTemplateResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example DE7A1F49-41C1-47*****DF-4CD0C02087DB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the snapshot template.
     *
     * @var vodTemplateInfo
     */
    public $vodTemplateInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateInfo' => 'VodTemplateInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vodTemplateInfo) {
            $res['VodTemplateInfo'] = null !== $this->vodTemplateInfo ? $this->vodTemplateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVodTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VodTemplateInfo'])) {
            $model->vodTemplateInfo = vodTemplateInfo::fromMap($map['VodTemplateInfo']);
        }

        return $model;
    }
}
