<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs\keySpec\supportedProtectionLevels;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs\keySpec\usages;
use AlibabaCloud\Tea\Model;

class keySpec extends Model
{
    /**
     * @var supportedProtectionLevels
     */
    public $supportedProtectionLevels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var usages
     */
    public $usages;
    protected $_name = [
        'supportedProtectionLevels' => 'SupportedProtectionLevels',
        'name'                      => 'Name',
        'usages'                    => 'Usages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedProtectionLevels) {
            $res['SupportedProtectionLevels'] = null !== $this->supportedProtectionLevels ? $this->supportedProtectionLevels->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->usages) {
            $res['Usages'] = null !== $this->usages ? $this->usages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keySpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedProtectionLevels'])) {
            $model->supportedProtectionLevels = supportedProtectionLevels::fromMap($map['SupportedProtectionLevels']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Usages'])) {
            $model->usages = usages::fromMap($map['Usages']);
        }

        return $model;
    }
}
