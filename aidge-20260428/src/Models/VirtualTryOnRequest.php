<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class VirtualTryOnRequest extends Model
{
    /**
     * @var string
     */
    public $clothImageUrl;

    /**
     * @var string
     */
    public $clothType;

    /**
     * @var string
     */
    public $modelImageUrl;

    /**
     * @var string
     */
    public $resolution;
    protected $_name = [
        'clothImageUrl' => 'ClothImageUrl',
        'clothType' => 'ClothType',
        'modelImageUrl' => 'ModelImageUrl',
        'resolution' => 'Resolution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothImageUrl) {
            $res['ClothImageUrl'] = $this->clothImageUrl;
        }

        if (null !== $this->clothType) {
            $res['ClothType'] = $this->clothType;
        }

        if (null !== $this->modelImageUrl) {
            $res['ModelImageUrl'] = $this->modelImageUrl;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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
        if (isset($map['ClothImageUrl'])) {
            $model->clothImageUrl = $map['ClothImageUrl'];
        }

        if (isset($map['ClothType'])) {
            $model->clothType = $map['ClothType'];
        }

        if (isset($map['ModelImageUrl'])) {
            $model->modelImageUrl = $map['ModelImageUrl'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
