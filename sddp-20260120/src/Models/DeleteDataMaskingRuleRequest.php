<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\DeleteDataMaskingRuleRequest\subRuleList;

class DeleteDataMaskingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var subRuleList[]
     */
    public $subRuleList;
    protected $_name = [
        'engineType' => 'EngineType',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'subRuleList' => 'SubRuleList',
    ];

    public function validate()
    {
        if (\is_array($this->subRuleList)) {
            Model::validateArray($this->subRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->subRuleList) {
            if (\is_array($this->subRuleList)) {
                $res['SubRuleList'] = [];
                $n1 = 0;
                foreach ($this->subRuleList as $item1) {
                    $res['SubRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['SubRuleList'])) {
            if (!empty($map['SubRuleList'])) {
                $model->subRuleList = [];
                $n1 = 0;
                foreach ($map['SubRuleList'] as $item1) {
                    $model->subRuleList[$n1] = subRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
