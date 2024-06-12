<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribePatternTypesResponseBody\patternTypes;
use AlibabaCloud\Tea\Model;

class DescribePatternTypesResponseBody extends Model
{
    /**
     * @description The instance types that meet the specified requirements.
     *
     * @var patternTypes[]
     */
    public $patternTypes;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'patternTypes' => 'PatternTypes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patternTypes) {
            $res['PatternTypes'] = [];
            if (null !== $this->patternTypes && \is_array($this->patternTypes)) {
                $n = 0;
                foreach ($this->patternTypes as $item) {
                    $res['PatternTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePatternTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PatternTypes'])) {
            if (!empty($map['PatternTypes'])) {
                $model->patternTypes = [];
                $n                   = 0;
                foreach ($map['PatternTypes'] as $item) {
                    $model->patternTypes[$n++] = null !== $item ? patternTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
