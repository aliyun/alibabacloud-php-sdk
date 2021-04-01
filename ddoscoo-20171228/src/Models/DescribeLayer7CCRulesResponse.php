<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesResponse\layer7CCRules;
use AlibabaCloud\Tea\Model;

class DescribeLayer7CCRulesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var layer7CCRules[]
     */
    public $layer7CCRules;
    protected $_name = [
        'requestId'     => 'RequestId',
        'total'         => 'Total',
        'layer7CCRules' => 'Layer7CCRules',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('layer7CCRules', $this->layer7CCRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->layer7CCRules) {
            $res['Layer7CCRules'] = [];
            if (null !== $this->layer7CCRules && \is_array($this->layer7CCRules)) {
                $n = 0;
                foreach ($this->layer7CCRules as $item) {
                    $res['Layer7CCRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer7CCRulesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Layer7CCRules'])) {
            if (!empty($map['Layer7CCRules'])) {
                $model->layer7CCRules = [];
                $n                    = 0;
                foreach ($map['Layer7CCRules'] as $item) {
                    $model->layer7CCRules[$n++] = null !== $item ? layer7CCRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
