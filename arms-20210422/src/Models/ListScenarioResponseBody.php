<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListScenarioResponseBody\armsScenarios;
use AlibabaCloud\Tea\Model;

class ListScenarioResponseBody extends Model
{
    /**
     * @var armsScenarios[]
     */
    public $armsScenarios;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'armsScenarios' => 'ArmsScenarios',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsScenarios) {
            $res['ArmsScenarios'] = [];
            if (null !== $this->armsScenarios && \is_array($this->armsScenarios)) {
                $n = 0;
                foreach ($this->armsScenarios as $item) {
                    $res['ArmsScenarios'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScenarioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArmsScenarios'])) {
            if (!empty($map['ArmsScenarios'])) {
                $model->armsScenarios = [];
                $n                    = 0;
                foreach ($map['ArmsScenarios'] as $item) {
                    $model->armsScenarios[$n++] = null !== $item ? armsScenarios::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
