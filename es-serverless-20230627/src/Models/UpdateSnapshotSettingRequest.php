<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Tea\Model;

class UpdateSnapshotSettingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description This parameter is required.
     *
     * @example 0 0 01 ? * * *
     *
     * @var string
     */
    public $quartzRegex;
    protected $_name = [
        'enable'      => 'enable',
        'quartzRegex' => 'quartzRegex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->quartzRegex) {
            $res['quartzRegex'] = $this->quartzRegex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSnapshotSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['quartzRegex'])) {
            $model->quartzRegex = $map['quartzRegex'];
        }

        return $model;
    }
}
