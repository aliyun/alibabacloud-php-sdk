<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class AuditTTSVoiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $auditionUrl;
    protected $_name = [
        'requestId'   => 'RequestId',
        'auditionUrl' => 'AuditionUrl',
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
        if (null !== $this->auditionUrl) {
            $res['AuditionUrl'] = $this->auditionUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditTTSVoiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuditionUrl'])) {
            $model->auditionUrl = $map['AuditionUrl'];
        }

        return $model;
    }
}
