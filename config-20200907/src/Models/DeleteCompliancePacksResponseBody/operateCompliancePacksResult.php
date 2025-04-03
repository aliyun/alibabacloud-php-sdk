<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksResponseBody\operateCompliancePacksResult\operateCompliancePacks;

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
        if (\is_array($this->operateCompliancePacks)) {
            Model::validateArray($this->operateCompliancePacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateCompliancePacks) {
            if (\is_array($this->operateCompliancePacks)) {
                $res['OperateCompliancePacks'] = [];
                $n1 = 0;
                foreach ($this->operateCompliancePacks as $item1) {
                    $res['OperateCompliancePacks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperateCompliancePacks'])) {
            if (!empty($map['OperateCompliancePacks'])) {
                $model->operateCompliancePacks = [];
                $n1 = 0;
                foreach ($map['OperateCompliancePacks'] as $item1) {
                    $model->operateCompliancePacks[$n1++] = operateCompliancePacks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
