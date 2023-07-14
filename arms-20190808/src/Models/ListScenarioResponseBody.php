<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponseBody\armsScenarios;
use AlibabaCloud\Tea\Model;

class ListScenarioResponseBody extends Model
{
    /**
     * @description The detailed information of the business monitoring job.
     *
     * @var armsScenarios[]
     */
    public $armsScenarios;

    /**
     * @description The ID of the request.
     *
     * @example 98027D1F-3AEB-492C-A4AA-E9217992****
     *
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
