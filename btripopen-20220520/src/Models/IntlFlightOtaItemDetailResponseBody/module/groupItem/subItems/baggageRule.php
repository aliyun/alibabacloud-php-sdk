<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\subItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemSubItemsBaggageRuleBaggageInfoMapValue;

class baggageRule extends Model
{
    /**
     * @var string
     */
    public $baggageDigest;

    /**
     * @var ModuleGroupItemSubItemsBaggageRuleBaggageInfoMapValue[][]
     */
    public $baggageInfoMap;

    /**
     * @var bool
     */
    public $structuredBaggage;
    protected $_name = [
        'baggageDigest' => 'baggage_digest',
        'baggageInfoMap' => 'baggage_info_map',
        'structuredBaggage' => 'structured_baggage',
    ];

    public function validate()
    {
        if (\is_array($this->baggageInfoMap)) {
            Model::validateArray($this->baggageInfoMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageDigest) {
            $res['baggage_digest'] = $this->baggageDigest;
        }

        if (null !== $this->baggageInfoMap) {
            if (\is_array($this->baggageInfoMap)) {
                $res['baggage_info_map'] = [];
                foreach ($this->baggageInfoMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['baggage_info_map'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['baggage_info_map'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->structuredBaggage) {
            $res['structured_baggage'] = $this->structuredBaggage;
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
        if (isset($map['baggage_digest'])) {
            $model->baggageDigest = $map['baggage_digest'];
        }

        if (isset($map['baggage_info_map'])) {
            if (!empty($map['baggage_info_map'])) {
                $model->baggageInfoMap = [];
                foreach ($map['baggage_info_map'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->baggageInfoMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->baggageInfoMap[$key1][$n2++] = ModuleGroupItemSubItemsBaggageRuleBaggageInfoMapValue::fromMap($item2);
                        }
                    }
                }
            }
        }

        if (isset($map['structured_baggage'])) {
            $model->structuredBaggage = $map['structured_baggage'];
        }

        return $model;
    }
}
