<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule;

class module extends Model
{
    /**
     * @var string[]
     */
    public $activatedServiceTypeList;

    /**
     * @var reserveRule
     */
    public $reserveRule;
    protected $_name = [
        'activatedServiceTypeList' => 'activated_service_type_list',
        'reserveRule' => 'reserve_rule',
    ];

    public function validate()
    {
        if (\is_array($this->activatedServiceTypeList)) {
            Model::validateArray($this->activatedServiceTypeList);
        }
        if (null !== $this->reserveRule) {
            $this->reserveRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activatedServiceTypeList) {
            if (\is_array($this->activatedServiceTypeList)) {
                $res['activated_service_type_list'] = [];
                $n1 = 0;
                foreach ($this->activatedServiceTypeList as $item1) {
                    $res['activated_service_type_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reserveRule) {
            $res['reserve_rule'] = null !== $this->reserveRule ? $this->reserveRule->toArray($noStream) : $this->reserveRule;
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
        if (isset($map['activated_service_type_list'])) {
            if (!empty($map['activated_service_type_list'])) {
                $model->activatedServiceTypeList = [];
                $n1 = 0;
                foreach ($map['activated_service_type_list'] as $item1) {
                    $model->activatedServiceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['reserve_rule'])) {
            $model->reserveRule = reserveRule::fromMap($map['reserve_rule']);
        }

        return $model;
    }
}
