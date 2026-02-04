<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceGlobalizationConfigResponseBody\globalizationConfig;

class GetInstanceGlobalizationConfigResponseBody extends Model
{
    /**
     * @var globalizationConfig
     */
    public $globalizationConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalizationConfig' => 'GlobalizationConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->globalizationConfig) {
            $this->globalizationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalizationConfig) {
            $res['GlobalizationConfig'] = null !== $this->globalizationConfig ? $this->globalizationConfig->toArray($noStream) : $this->globalizationConfig;
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
        if (isset($map['GlobalizationConfig'])) {
            $model->globalizationConfig = globalizationConfig::fromMap($map['GlobalizationConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
