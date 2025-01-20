<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponseBody\complianceResult\complianceResultList;

class complianceResult extends Model
{
    /**
     * @var complianceResultList[]
     */
    public $complianceResultList;
    protected $_name = [
        'complianceResultList' => 'ComplianceResultList',
    ];

    public function validate()
    {
        if (\is_array($this->complianceResultList)) {
            Model::validateArray($this->complianceResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceResultList) {
            if (\is_array($this->complianceResultList)) {
                $res['ComplianceResultList'] = [];
                $n1                          = 0;
                foreach ($this->complianceResultList as $item1) {
                    $res['ComplianceResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComplianceResultList'])) {
            if (!empty($map['ComplianceResultList'])) {
                $model->complianceResultList = [];
                $n1                          = 0;
                foreach ($map['ComplianceResultList'] as $item1) {
                    $model->complianceResultList[$n1++] = complianceResultList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
