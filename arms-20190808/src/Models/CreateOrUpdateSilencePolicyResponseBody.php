<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody\silencePolicy;

class CreateOrUpdateSilencePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var silencePolicy
     */
    public $silencePolicy;
    protected $_name = [
        'requestId' => 'RequestId',
        'silencePolicy' => 'SilencePolicy',
    ];

    public function validate()
    {
        if (null !== $this->silencePolicy) {
            $this->silencePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->silencePolicy) {
            $res['SilencePolicy'] = null !== $this->silencePolicy ? $this->silencePolicy->toArray($noStream) : $this->silencePolicy;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SilencePolicy'])) {
            $model->silencePolicy = silencePolicy::fromMap($map['SilencePolicy']);
        }

        return $model;
    }
}
