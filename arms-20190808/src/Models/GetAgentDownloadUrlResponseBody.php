<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
