<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody\operateCompliancePacksResult\operateCompliancePacks;
use AlibabaCloud\Tea\Model;

class operateCompliancePacksResult extends Model
{
    /**
     * @var operateCompliancePacks[]
     */
    public $operateCompliancePacks;
    protected $_name = [
        'operateCompliancePacks' => 'OperateCompliancePacks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCompliancePacks) {
            $res['OperateCompliancePacks'] = [];
            if (null !== $this->operateCompliancePacks && \is_array($this->operateCompliancePacks)) {
                $n = 0;
                foreach ($this->operateCompliancePacks as $item) {
                    $res['OperateCompliancePacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateCompliancePacksResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateCompliancePacks'])) {
            if (!empty($map['OperateCompliancePacks'])) {
                $model->operateCompliancePacks = [];
                $n                             = 0;
                foreach ($map['OperateCompliancePacks'] as $item) {
                    $model->operateCompliancePacks[$n++] = null !== $item ? operateCompliancePacks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
