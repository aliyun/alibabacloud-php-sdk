<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesResponseBody\webCCRules;

class DescribeWebCCRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var webCCRules[]
     */
    public $webCCRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'webCCRules' => 'WebCCRules',
    ];

    public function validate()
    {
        if (\is_array($this->webCCRules)) {
            Model::validateArray($this->webCCRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->webCCRules) {
            if (\is_array($this->webCCRules)) {
                $res['WebCCRules'] = [];
                $n1                = 0;
                foreach ($this->webCCRules as $item1) {
                    $res['WebCCRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WebCCRules'])) {
            if (!empty($map['WebCCRules'])) {
                $model->webCCRules = [];
                $n1                = 0;
                foreach ($map['WebCCRules'] as $item1) {
                    $model->webCCRules[$n1++] = webCCRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
