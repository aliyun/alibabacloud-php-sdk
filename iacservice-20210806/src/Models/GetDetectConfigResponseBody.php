<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetDetectConfigResponseBody\detectConfig;

class GetDetectConfigResponseBody extends Model
{
    /**
     * @var detectConfig
     */
    public $detectConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectConfig' => 'detectConfig',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->detectConfig) {
            $this->detectConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectConfig) {
            $res['detectConfig'] = null !== $this->detectConfig ? $this->detectConfig->toArray($noStream) : $this->detectConfig;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['detectConfig'])) {
            $model->detectConfig = detectConfig::fromMap($map['detectConfig']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
