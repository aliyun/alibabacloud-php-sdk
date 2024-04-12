<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule;
use AlibabaCloud\Tea\Model;

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
        'reserveRule'              => 'reserve_rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activatedServiceTypeList) {
            $res['activated_service_type_list'] = $this->activatedServiceTypeList;
        }
        if (null !== $this->reserveRule) {
            $res['reserve_rule'] = null !== $this->reserveRule ? $this->reserveRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activated_service_type_list'])) {
            if (!empty($map['activated_service_type_list'])) {
                $model->activatedServiceTypeList = $map['activated_service_type_list'];
            }
        }
        if (isset($map['reserve_rule'])) {
            $model->reserveRule = reserveRule::fromMap($map['reserve_rule']);
        }

        return $model;
    }
}
