<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\edges\join;

use AlibabaCloud\Dara\Model;

class joinKeys extends Model
{
    /**
     * @var string
     */
    public $fromField;

    /**
     * @var string
     */
    public $toField;
    protected $_name = [
        'fromField' => 'FromField',
        'toField' => 'ToField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromField) {
            $res['FromField'] = $this->fromField;
        }

        if (null !== $this->toField) {
            $res['ToField'] = $this->toField;
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
        if (isset($map['FromField'])) {
            $model->fromField = $map['FromField'];
        }

        if (isset($map['ToField'])) {
            $model->toField = $map['ToField'];
        }

        return $model;
    }
}
