<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectMetaRequest extends Model
{
    /**
     * @var InputSerialization
     */
    public $inputSerialization;

    /**
     * @var bool
     */
    public $overwriteIfExists;
    protected $_name = [
        'inputSerialization' => 'InputSerialization',
        'overwriteIfExists'  => 'OverwriteIfExists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputSerialization) {
            $res['InputSerialization'] = null !== $this->inputSerialization ? $this->inputSerialization->toMap() : null;
        }
        if (null !== $this->overwriteIfExists) {
            $res['OverwriteIfExists'] = $this->overwriteIfExists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputSerialization'])) {
            $model->inputSerialization = InputSerialization::fromMap($map['InputSerialization']);
        }
        if (isset($map['OverwriteIfExists'])) {
            $model->overwriteIfExists = $map['OverwriteIfExists'];
        }

        return $model;
    }
}
