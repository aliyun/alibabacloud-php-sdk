<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\GetServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasRamPermissions;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDlfServiceOpen;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOssOpen;
    protected $_name = [
        'hasRamPermissions' => 'HasRamPermissions',
        'isDlfServiceOpen'  => 'IsDlfServiceOpen',
        'isOssOpen'         => 'IsOssOpen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasRamPermissions) {
            $res['HasRamPermissions'] = $this->hasRamPermissions;
        }
        if (null !== $this->isDlfServiceOpen) {
            $res['IsDlfServiceOpen'] = $this->isDlfServiceOpen;
        }
        if (null !== $this->isOssOpen) {
            $res['IsOssOpen'] = $this->isOssOpen;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasRamPermissions'])) {
            $model->hasRamPermissions = $map['HasRamPermissions'];
        }
        if (isset($map['IsDlfServiceOpen'])) {
            $model->isDlfServiceOpen = $map['IsDlfServiceOpen'];
        }
        if (isset($map['IsOssOpen'])) {
            $model->isOssOpen = $map['IsOssOpen'];
        }

        return $model;
    }
}
