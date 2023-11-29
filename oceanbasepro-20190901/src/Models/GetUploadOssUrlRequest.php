<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class GetUploadOssUrlRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $effectiveTimeMinutes;

    /**
     * @example CREATE_PROJECT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'effectiveTimeMinutes' => 'EffectiveTimeMinutes',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTimeMinutes) {
            $res['EffectiveTimeMinutes'] = $this->effectiveTimeMinutes;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadOssUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTimeMinutes'])) {
            $model->effectiveTimeMinutes = $map['EffectiveTimeMinutes'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
