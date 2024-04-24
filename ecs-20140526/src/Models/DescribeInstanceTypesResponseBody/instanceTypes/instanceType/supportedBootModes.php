<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Tea\Model;

class supportedBootModes extends Model
{
    /**
     * @var string[]
     */
    public $supportedBootMode;
    protected $_name = [
        'supportedBootMode' => 'SupportedBootMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedBootMode) {
            $res['SupportedBootMode'] = $this->supportedBootMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedBootModes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedBootMode'])) {
            if (!empty($map['SupportedBootMode'])) {
                $model->supportedBootMode = $map['SupportedBootMode'];
            }
        }

        return $model;
    }
}
