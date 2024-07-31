<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponseBody\programTypeAndCounts;
use AlibabaCloud\Tea\Model;

class ListProgramTypeCountResponseBody extends Model
{
    /**
     * @description The list of node types and quantity.
     *
     * @var programTypeAndCounts[]
     */
    public $programTypeAndCounts;

    /**
     * @description The request ID.
     *
     * @example E6F0DBDD-5AD****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'programTypeAndCounts' => 'ProgramTypeAndCounts',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->programTypeAndCounts) {
            $res['ProgramTypeAndCounts'] = [];
            if (null !== $this->programTypeAndCounts && \is_array($this->programTypeAndCounts)) {
                $n = 0;
                foreach ($this->programTypeAndCounts as $item) {
                    $res['ProgramTypeAndCounts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListProgramTypeCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramTypeAndCounts'])) {
            if (!empty($map['ProgramTypeAndCounts'])) {
                $model->programTypeAndCounts = [];
                $n                           = 0;
                foreach ($map['ProgramTypeAndCounts'] as $item) {
                    $model->programTypeAndCounts[$n++] = null !== $item ? programTypeAndCounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
