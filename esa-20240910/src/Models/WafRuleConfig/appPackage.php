<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage\packageSigns;

class appPackage extends Model
{
    /**
     * @var packageSigns[]
     */
    public $packageSigns;
    protected $_name = [
        'packageSigns' => 'PackageSigns',
    ];

    public function validate()
    {
        if (\is_array($this->packageSigns)) {
            Model::validateArray($this->packageSigns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageSigns) {
            if (\is_array($this->packageSigns)) {
                $res['PackageSigns'] = [];
                $n1                  = 0;
                foreach ($this->packageSigns as $item1) {
                    $res['PackageSigns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PackageSigns'])) {
            if (!empty($map['PackageSigns'])) {
                $model->packageSigns = [];
                $n1                  = 0;
                foreach ($map['PackageSigns'] as $item1) {
                    $model->packageSigns[$n1++] = packageSigns::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
