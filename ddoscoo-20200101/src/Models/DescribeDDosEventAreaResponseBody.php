<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponseBody\areas;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventAreaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var areas[]
     */
    public $areas;
    protected $_name = [
        'requestId' => 'RequestId',
        'areas'     => 'Areas',
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
        if (null !== $this->areas) {
            $res['Areas'] = [];
            if (null !== $this->areas && \is_array($this->areas)) {
                $n = 0;
                foreach ($this->areas as $item) {
                    $res['Areas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosEventAreaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Areas'])) {
            if (!empty($map['Areas'])) {
                $model->areas = [];
                $n            = 0;
                foreach ($map['Areas'] as $item) {
                    $model->areas[$n++] = null !== $item ? areas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
