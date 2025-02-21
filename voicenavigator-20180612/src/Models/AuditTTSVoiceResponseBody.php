<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class AuditTTSVoiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditionUrl;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'auditionUrl' => 'AuditionUrl',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditionUrl) {
            $res['AuditionUrl'] = $this->auditionUrl;
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
        if (isset($map['AuditionUrl'])) {
            $model->auditionUrl = $map['AuditionUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
