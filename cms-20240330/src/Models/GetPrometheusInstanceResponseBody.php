<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponseBody\prometheusInstance;

class GetPrometheusInstanceResponseBody extends Model
{
    /**
     * @var prometheusInstance
     */
    public $prometheusInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusInstance' => 'prometheusInstance',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->prometheusInstance) {
            $this->prometheusInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusInstance) {
            $res['prometheusInstance'] = null !== $this->prometheusInstance ? $this->prometheusInstance->toArray($noStream) : $this->prometheusInstance;
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
        if (isset($map['prometheusInstance'])) {
            $model->prometheusInstance = prometheusInstance::fromMap($map['prometheusInstance']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
