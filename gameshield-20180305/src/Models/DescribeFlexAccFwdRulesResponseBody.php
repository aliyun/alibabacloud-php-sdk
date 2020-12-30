<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccFwdRulesResponseBody\flexAccFwdRules;
use AlibabaCloud\Tea\Model;

class DescribeFlexAccFwdRulesResponseBody extends Model
{
    /**
     * @var flexAccFwdRules[]
     */
    public $flexAccFwdRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'flexAccFwdRules' => 'FlexAccFwdRules',
        'requestId'       => 'RequestId',
        'total'           => 'Total',
        'promptInfo'      => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flexAccFwdRules) {
            $res['FlexAccFwdRules'] = [];
            if (null !== $this->flexAccFwdRules && \is_array($this->flexAccFwdRules)) {
                $n = 0;
                foreach ($this->flexAccFwdRules as $item) {
                    $res['FlexAccFwdRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexAccFwdRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlexAccFwdRules'])) {
            if (!empty($map['FlexAccFwdRules'])) {
                $model->flexAccFwdRules = [];
                $n                      = 0;
                foreach ($map['FlexAccFwdRules'] as $item) {
                    $model->flexAccFwdRules[$n++] = null !== $item ? flexAccFwdRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
