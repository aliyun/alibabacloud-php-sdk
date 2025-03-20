<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineOptionalSpecsResponseBody\specs;
use AlibabaCloud\Tea\Model;

class ListRoutineOptionalSpecsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1234567890ABCDEF01234567890ABCDEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The available specifications.
     *
     * @var specs[]
     */
    public $specs;
    protected $_name = [
        'requestId' => 'RequestId',
        'specs' => 'Specs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specs) {
            $res['Specs'] = [];
            if (null !== $this->specs && \is_array($this->specs)) {
                $n = 0;
                foreach ($this->specs as $item) {
                    $res['Specs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoutineOptionalSpecsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Specs'])) {
            if (!empty($map['Specs'])) {
                $model->specs = [];
                $n = 0;
                foreach ($map['Specs'] as $item) {
                    $model->specs[$n++] = null !== $item ? specs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
