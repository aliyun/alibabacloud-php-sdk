<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslPublishedResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tslStr;

    /**
     * @var string
     */
    public $tslUri;
    protected $_name = [
        'tslStr' => 'TslStr',
        'tslUri' => 'TslUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tslStr) {
            $res['TslStr'] = $this->tslStr;
        }

        if (null !== $this->tslUri) {
            $res['TslUri'] = $this->tslUri;
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
        if (isset($map['TslStr'])) {
            $model->tslStr = $map['TslStr'];
        }

        if (isset($map['TslUri'])) {
            $model->tslUri = $map['TslUri'];
        }

        return $model;
    }
}
