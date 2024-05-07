<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAgentDownloadUrlResponseBody extends Model
{
    /**
     * @description The download URL of the ARMS agent.
     *
     * @example http://arms-apm-hangzhou.oss-cn-hangzhou-internal.aliyuncs.com/2.7.1.1/
     *
     * @var string
     */
    public $armsAgentDownloadUrl;

    /**
     * @description The request ID.
     *
     * @example 14043452-D486-4EA1-80C9-BA73FB81****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'armsAgentDownloadUrl' => 'ArmsAgentDownloadUrl',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsAgentDownloadUrl) {
            $res['ArmsAgentDownloadUrl'] = $this->armsAgentDownloadUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentDownloadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArmsAgentDownloadUrl'])) {
            $model->armsAgentDownloadUrl = $map['ArmsAgentDownloadUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
