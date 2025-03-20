<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage\packageSigns;
use AlibabaCloud\Tea\Model;

class appPackage extends Model
{
    /**
     * @var packageSigns[]
     */
    public $packageSigns;
    protected $_name = [
        'packageSigns' => 'PackageSigns',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageSigns) {
            $res['PackageSigns'] = [];
            if (null !== $this->packageSigns && \is_array($this->packageSigns)) {
                $n = 0;
                foreach ($this->packageSigns as $item) {
                    $res['PackageSigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageSigns'])) {
            if (!empty($map['PackageSigns'])) {
                $model->packageSigns = [];
                $n = 0;
                foreach ($map['PackageSigns'] as $item) {
                    $model->packageSigns[$n++] = null !== $item ? packageSigns::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
