<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage;

use AlibabaCloud\Dara\Model;

class securityProtectionTypes extends Model
{
    /**
     * @var string[]
     */
    public $securityProtectionType;
    protected $_name = [
        'securityProtectionType' => 'SecurityProtectionType',
    ];

    public function validate()
    {
        if (\is_array($this->securityProtectionType)) {
            Model::validateArray($this->securityProtectionType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityProtectionType) {
            if (\is_array($this->securityProtectionType)) {
                $res['SecurityProtectionType'] = [];
                $n1 = 0;
                foreach ($this->securityProtectionType as $item1) {
                    $res['SecurityProtectionType'][$n1++] = $item1;
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
        if (isset($map['SecurityProtectionType'])) {
            if (!empty($map['SecurityProtectionType'])) {
                $model->securityProtectionType = [];
                $n1 = 0;
                foreach ($map['SecurityProtectionType'] as $item1) {
                    $model->securityProtectionType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
