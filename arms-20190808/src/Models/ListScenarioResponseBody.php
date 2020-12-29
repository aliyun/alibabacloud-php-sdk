<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponseBody\armsScenarios;
use AlibabaCloud\Tea\Model;

class ListScenarioResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var armsScenarios[]
     */
    public $armsScenarios;
    protected $_name = [
        'requestId'     => 'RequestId',
        'armsScenarios' => 'ArmsScenarios',
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
        if (null !== $this->armsScenarios) {
            $res['ArmsScenarios'] = [];
            if (null !== $this->armsScenarios && \is_array($this->armsScenarios)) {
                $n = 0;
                foreach ($this->armsScenarios as $item) {
                    $res['ArmsScenarios'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ArmsScenarios'])) {
            if (!empty($map['ArmsScenarios'])) {
                $model->armsScenarios = [];
                $n                    = 0;
                foreach ($map['ArmsScenarios'] as $item) {
                    $model->armsScenarios[$n++] = null !== $item ? armsScenarios::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
