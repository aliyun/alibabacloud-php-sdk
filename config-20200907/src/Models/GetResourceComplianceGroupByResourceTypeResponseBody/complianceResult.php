<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByResourceTypeResponseBody\complianceResult\complianceResultList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceResultList) {
            $res['ComplianceResultList'] = [];
            if (null !== $this->complianceResultList && \is_array($this->complianceResultList)) {
                $n = 0;
                foreach ($this->complianceResultList as $item) {
                    $res['ComplianceResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceResultList'])) {
            if (!empty($map['ComplianceResultList'])) {
                $model->complianceResultList = [];
                $n                           = 0;
                foreach ($map['ComplianceResultList'] as $item) {
                    $model->complianceResultList[$n++] = null !== $item ? complianceResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
