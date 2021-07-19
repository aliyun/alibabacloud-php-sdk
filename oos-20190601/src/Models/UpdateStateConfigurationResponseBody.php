<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationResponseBody\stateConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateStateConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stateConfiguration[]
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
            $res['StateConfiguration'] = [];
            if (null !== $this->stateConfiguration && \is_array($this->stateConfiguration)) {
                $n = 0;
                foreach ($this->stateConfiguration as $item) {
                    $res['StateConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStateConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StateConfiguration'])) {
            if (!empty($map['StateConfiguration'])) {
                $model->stateConfiguration = [];
                $n                         = 0;
                foreach ($map['StateConfiguration'] as $item) {
                    $model->stateConfiguration[$n++] = null !== $item ? stateConfiguration::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
