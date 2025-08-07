<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;

class complianceMetadata extends Model
{
    /**
     * @var string[]
     */
    public $compliancePacks;
    protected $_name = [
        'compliancePacks' => 'CompliancePacks',
    ];

    public function validate()
    {
        if (\is_array($this->compliancePacks)) {
            Model::validateArray($this->compliancePacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePacks) {
            if (\is_array($this->compliancePacks)) {
                $res['CompliancePacks'] = [];
                $n1 = 0;
                foreach ($this->compliancePacks as $item1) {
                    $res['CompliancePacks'][$n1] = $item1;
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
        if (isset($map['CompliancePacks'])) {
            if (!empty($map['CompliancePacks'])) {
                $model->compliancePacks = [];
                $n1 = 0;
                foreach ($map['CompliancePacks'] as $item1) {
                    $model->compliancePacks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
