<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteInterceptionTargetRequest extends Model
{
    /**
     * @var string
     */
    public $targetIds;
    protected $_name = [
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
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
        if (isset($map['TargetIds'])) {
            $model->targetIds = $map['TargetIds'];
        }

        return $model;
    }
}
