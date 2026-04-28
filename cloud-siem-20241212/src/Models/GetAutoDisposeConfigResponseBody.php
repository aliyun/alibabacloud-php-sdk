<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAutoDisposeConfigResponseBody\autoDisposeConfig;

class GetAutoDisposeConfigResponseBody extends Model
{
    /**
     * @var autoDisposeConfig
     */
    public $autoDisposeConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoDisposeConfig' => 'AutoDisposeConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->autoDisposeConfig) {
            $this->autoDisposeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDisposeConfig) {
            $res['AutoDisposeConfig'] = null !== $this->autoDisposeConfig ? $this->autoDisposeConfig->toArray($noStream) : $this->autoDisposeConfig;
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
        if (isset($map['AutoDisposeConfig'])) {
            $model->autoDisposeConfig = autoDisposeConfig::fromMap($map['AutoDisposeConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
