<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationResponseBody\stateConfiguration;

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
        'requestId' => 'RequestId',
        'stateConfiguration' => 'StateConfiguration',
    ];

    public function validate()
    {
        if (\is_array($this->stateConfiguration)) {
            Model::validateArray($this->stateConfiguration);
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
            if (\is_array($this->stateConfiguration)) {
                $res['StateConfiguration'] = [];
                $n1 = 0;
                foreach ($this->stateConfiguration as $item1) {
                    $res['StateConfiguration'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['StateConfiguration'])) {
                $model->stateConfiguration = [];
                $n1 = 0;
                foreach ($map['StateConfiguration'] as $item1) {
                    $model->stateConfiguration[$n1++] = stateConfiguration::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
