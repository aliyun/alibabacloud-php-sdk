<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license\extendArray\licenseAttribute;

class extendArray extends Model
{
    /**
     * @var licenseAttribute[]
     */
    public $licenseAttribute;
    protected $_name = [
        'licenseAttribute' => 'LicenseAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->licenseAttribute)) {
            Model::validateArray($this->licenseAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licenseAttribute) {
            if (\is_array($this->licenseAttribute)) {
                $res['LicenseAttribute'] = [];
                $n1                      = 0;
                foreach ($this->licenseAttribute as $item1) {
                    $res['LicenseAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LicenseAttribute'])) {
            if (!empty($map['LicenseAttribute'])) {
                $model->licenseAttribute = [];
                $n1                      = 0;
                foreach ($map['LicenseAttribute'] as $item1) {
                    $model->licenseAttribute[$n1++] = licenseAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
