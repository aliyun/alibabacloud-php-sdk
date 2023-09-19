<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationResponseBody\stateConfiguration;
use AlibabaCloud\Tea\Model;

class CreateStateConfigurationResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1306108F-610C-40FD-AAD5-DA13E8B00BE9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the desired-state configuration.
     *
     * @var stateConfiguration
     */
    public $stateConfiguration;
    protected $_name = [
        'requestId'          => 'RequestId',
        'stateConfiguration' => 'StateConfiguration',
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
        if (null !== $this->stateConfiguration) {
            $res['StateConfiguration'] = null !== $this->stateConfiguration ? $this->stateConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStateConfigurationResponseBody
     */
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
