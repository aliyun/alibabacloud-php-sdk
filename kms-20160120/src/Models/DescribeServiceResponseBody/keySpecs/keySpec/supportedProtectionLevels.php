<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs\keySpec;

use AlibabaCloud\Tea\Model;

class supportedProtectionLevels extends Model
{
    /**
     * @var string[]
     */
    public $supportedProtectionLevel;
    protected $_name = [
        'supportedProtectionLevel' => 'SupportedProtectionLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedProtectionLevel) {
            $res['SupportedProtectionLevel'] = $this->supportedProtectionLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedProtectionLevels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedProtectionLevel'])) {
            if (!empty($map['SupportedProtectionLevel'])) {
                $model->supportedProtectionLevel = $map['SupportedProtectionLevel'];
            }
        }

        return $model;
    }
}
