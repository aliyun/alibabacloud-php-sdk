<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class chatbotBusinessUnit extends Model
{
    /**
     * @var int
     */
    public $unitId;

    /**
     * @var string
     */
    public $unitKey;
    protected $_name = [
        'unitId' => 'UnitId',
        'unitKey' => 'UnitKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }

        if (null !== $this->unitKey) {
            $res['UnitKey'] = $this->unitKey;
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
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }

        if (isset($map['UnitKey'])) {
            $model->unitKey = $map['UnitKey'];
        }

        return $model;
    }
}
