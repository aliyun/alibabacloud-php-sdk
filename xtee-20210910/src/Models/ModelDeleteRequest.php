<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ModelDeleteRequest extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'modelName' => 'ModelName',
        'regId' => 'RegId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
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
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        return $model;
    }
}
