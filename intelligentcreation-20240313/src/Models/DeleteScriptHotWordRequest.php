<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class DeleteScriptHotWordRequest extends Model
{
    /**
     * @var string
     */
    public $hotWordId;
    protected $_name = [
        'hotWordId' => 'hotWordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotWordId) {
            $res['hotWordId'] = $this->hotWordId;
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
        if (isset($map['hotWordId'])) {
            $model->hotWordId = $map['hotWordId'];
        }

        return $model;
    }
}
