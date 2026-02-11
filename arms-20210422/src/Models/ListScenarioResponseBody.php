<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListScenarioResponseBody\armsScenarios;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->armsScenarios)) {
            Model::validateArray($this->armsScenarios);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->armsScenarios) {
            if (\is_array($this->armsScenarios)) {
                $res['ArmsScenarios'] = [];
                $n1 = 0;
                foreach ($this->armsScenarios as $item1) {
                    $res['ArmsScenarios'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ArmsScenarios'])) {
            if (!empty($map['ArmsScenarios'])) {
                $model->armsScenarios = [];
                $n1 = 0;
                foreach ($map['ArmsScenarios'] as $item1) {
                    $model->armsScenarios[$n1] = armsScenarios::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
