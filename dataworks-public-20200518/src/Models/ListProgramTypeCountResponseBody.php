<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponseBody\programTypeAndCounts;

class ListProgramTypeCountResponseBody extends Model
{
    /**
     * @var programTypeAndCounts[]
     */
    public $programTypeAndCounts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'programTypeAndCounts' => 'ProgramTypeAndCounts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->programTypeAndCounts)) {
            Model::validateArray($this->programTypeAndCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->programTypeAndCounts) {
            if (\is_array($this->programTypeAndCounts)) {
                $res['ProgramTypeAndCounts'] = [];
                $n1 = 0;
                foreach ($this->programTypeAndCounts as $item1) {
                    $res['ProgramTypeAndCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProgramTypeAndCounts'])) {
            if (!empty($map['ProgramTypeAndCounts'])) {
                $model->programTypeAndCounts = [];
                $n1 = 0;
                foreach ($map['ProgramTypeAndCounts'] as $item1) {
                    $model->programTypeAndCounts[$n1] = programTypeAndCounts::fromMap($item1);
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
