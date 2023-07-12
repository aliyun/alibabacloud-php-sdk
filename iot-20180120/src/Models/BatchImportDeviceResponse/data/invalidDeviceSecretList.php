<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceSecretList extends Model
{
    /**
     * @description invalidDeviceSecret
     *
     * @var string[]
     */
    public $invalidDeviceSecret;
    protected $_name = [
        'invalidDeviceSecret' => 'invalidDeviceSecret',
    ];

    public function validate()
    {
        Model::validateRequired('invalidDeviceSecret', $this->invalidDeviceSecret, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceSecret) {
            $res['invalidDeviceSecret'] = $this->invalidDeviceSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceSecretList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidDeviceSecret'])) {
            if (!empty($map['invalidDeviceSecret'])) {
                $model->invalidDeviceSecret = $map['invalidDeviceSecret'];
            }
        }

        return $model;
    }
}
