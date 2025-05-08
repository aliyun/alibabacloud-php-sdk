<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationResponseBody\stateConfiguration;

class CreateStateConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stateConfiguration
     */
    public $stateConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'stateConfiguration' => 'StateConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->stateConfiguration) {
            $this->stateConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stateConfiguration) {
            $res['StateConfiguration'] = null !== $this->stateConfiguration ? $this->stateConfiguration->toArray($noStream) : $this->stateConfiguration;
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

        if (isset($map['StateConfiguration'])) {
            $model->stateConfiguration = stateConfiguration::fromMap($map['StateConfiguration']);
        }

        return $model;
    }
}
