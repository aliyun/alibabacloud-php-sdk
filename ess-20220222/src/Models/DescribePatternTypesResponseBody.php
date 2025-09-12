<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribePatternTypesResponseBody\patternTypes;

class DescribePatternTypesResponseBody extends Model
{
    /**
     * @var patternTypes[]
     */
    public $patternTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'patternTypes' => 'PatternTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->patternTypes)) {
            Model::validateArray($this->patternTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->patternTypes) {
            if (\is_array($this->patternTypes)) {
                $res['PatternTypes'] = [];
                $n1 = 0;
                foreach ($this->patternTypes as $item1) {
                    $res['PatternTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PatternTypes'])) {
            if (!empty($map['PatternTypes'])) {
                $model->patternTypes = [];
                $n1 = 0;
                foreach ($map['PatternTypes'] as $item1) {
                    $model->patternTypes[$n1] = patternTypes::fromMap($item1);
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
