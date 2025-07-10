<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody\systemParams\systemParamItem;

class systemParams extends Model
{
    /**
     * @var systemParamItem[]
     */
    public $systemParamItem;
    protected $_name = [
        'systemParamItem' => 'SystemParamItem',
    ];

    public function validate()
    {
        if (\is_array($this->systemParamItem)) {
            Model::validateArray($this->systemParamItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemParamItem) {
            if (\is_array($this->systemParamItem)) {
                $res['SystemParamItem'] = [];
                $n1 = 0;
                foreach ($this->systemParamItem as $item1) {
                    $res['SystemParamItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SystemParamItem'])) {
            if (!empty($map['SystemParamItem'])) {
                $model->systemParamItem = [];
                $n1 = 0;
                foreach ($map['SystemParamItem'] as $item1) {
                    $model->systemParamItem[$n1] = systemParamItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
