<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class GetAgentDownloadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $armsAgentDownloadUrl;

    /**
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
