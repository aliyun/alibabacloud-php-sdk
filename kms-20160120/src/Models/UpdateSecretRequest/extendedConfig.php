<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRequest;

use AlibabaCloud\Tea\Model;

class extendedConfig extends Model
{
    /**
     * @description The custom data in the extended configuration of the secret.
     *
     * > *   If this parameter is specified, the existing extended configuration of the secret is updated.
     * > *   This parameter is unavailable for generic secrets.
     * @example {"DBName":"app1","Port":"3306"}
     *
     * @var mixed[]
     */
    public $customData;
    protected $_name = [
        'customData' => 'CustomData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customData) {
            $res['CustomData'] = $this->customData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomData'])) {
            $model->customData = $map['CustomData'];
        }

        return $model;
    }
}
