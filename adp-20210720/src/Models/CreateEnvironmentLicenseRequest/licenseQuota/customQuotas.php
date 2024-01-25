<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest\licenseQuota;

use AlibabaCloud\Tea\Model;

class customQuotas extends Model
{
    /**
     * @example value of name
     *
     * @var string
     */
    public $description;

    /**
     * @example name
     *
     * @var string
     */
    public $key;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'description',
        'key'         => 'key',
        'value'       => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customQuotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
