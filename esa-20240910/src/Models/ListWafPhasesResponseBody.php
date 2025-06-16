<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases;

class ListWafPhasesResponseBody extends Model
{
    /**
     * @var phases[]
     */
    public $phases;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'phases' => 'Phases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->phases)) {
            Model::validateArray($this->phases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phases) {
            if (\is_array($this->phases)) {
                $res['Phases'] = [];
                $n1 = 0;
                foreach ($this->phases as $item1) {
                    $res['Phases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Phases'])) {
            if (!empty($map['Phases'])) {
                $model->phases = [];
                $n1 = 0;
                foreach ($map['Phases'] as $item1) {
                    $model->phases[$n1] = phases::fromMap($item1);
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
