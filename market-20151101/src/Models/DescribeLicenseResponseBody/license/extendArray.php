<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license\extendArray\licenseAttribute;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseAttribute) {
            $res['LicenseAttribute'] = [];
            if (null !== $this->licenseAttribute && \is_array($this->licenseAttribute)) {
                $n = 0;
                foreach ($this->licenseAttribute as $item) {
                    $res['LicenseAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LicenseAttribute'])) {
            if (!empty($map['LicenseAttribute'])) {
                $model->licenseAttribute = [];
                $n                       = 0;
                foreach ($map['LicenseAttribute'] as $item) {
                    $model->licenseAttribute[$n++] = null !== $item ? licenseAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
