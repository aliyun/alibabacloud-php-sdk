<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class GetUploadOssUrlRequest extends Model
{
    /**
     * @var int
     */
    public $effectiveTimeMinutes;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'effectiveTimeMinutes' => 'EffectiveTimeMinutes',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
