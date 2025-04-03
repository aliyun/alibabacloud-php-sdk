<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponseBody\complianceResult\compliances;

class complianceResult extends Model
{
    /**
     * @var compliances[]
     */
    public $compliances;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliances' => 'Compliances',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->compliances)) {
            Model::validateArray($this->compliances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliances) {
            if (\is_array($this->compliances)) {
                $res['Compliances'] = [];
                $n1 = 0;
                foreach ($this->compliances as $item1) {
                    $res['Compliances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Compliances'])) {
            if (!empty($map['Compliances'])) {
                $model->compliances = [];
                $n1 = 0;
                foreach ($map['Compliances'] as $item1) {
                    $model->compliances[$n1++] = compliances::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
