<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponseBody\areas;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventAreaResponseBody extends Model
{
    /**
     * @description The information about the source region from which the volumetric attack was initiated.
     *
     * @var areas[]
     */
    public $areas;

    /**
     * @description The ID of the request.
     *
     * @example 11710C9F-BC5E-481A-BEC5-C6D8FBFCA827
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areas'     => 'Areas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areas) {
            $res['Areas'] = [];
            if (null !== $this->areas && \is_array($this->areas)) {
                $n = 0;
                foreach ($this->areas as $item) {
                    $res['Areas'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDDosEventAreaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Areas'])) {
            if (!empty($map['Areas'])) {
                $model->areas = [];
                $n            = 0;
                foreach ($map['Areas'] as $item) {
                    $model->areas[$n++] = null !== $item ? areas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
