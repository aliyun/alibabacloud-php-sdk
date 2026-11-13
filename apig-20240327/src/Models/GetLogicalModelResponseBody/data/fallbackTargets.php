<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetLogicalModelResponseBody\data;

use AlibabaCloud\Dara\Model;

class fallbackTargets extends Model
{
    /**
     * @var string
     */
    public $modelCardId;
    protected $_name = [
        'modelCardId' => 'modelCardId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
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
        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        return $model;
    }
}
