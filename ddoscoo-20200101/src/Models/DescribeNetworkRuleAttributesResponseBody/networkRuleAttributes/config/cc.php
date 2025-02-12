<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\cc\sblack;

class cc extends Model
{
    /**
     * @var sblack[]
     */
    public $sblack;
    protected $_name = [
        'sblack' => 'Sblack',
    ];

    public function validate()
    {
        if (\is_array($this->sblack)) {
            Model::validateArray($this->sblack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sblack) {
            if (\is_array($this->sblack)) {
                $res['Sblack'] = [];
                $n1            = 0;
                foreach ($this->sblack as $item1) {
                    $res['Sblack'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Sblack'])) {
            if (!empty($map['Sblack'])) {
                $model->sblack = [];
                $n1            = 0;
                foreach ($map['Sblack'] as $item1) {
                    $model->sblack[$n1++] = sblack::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
