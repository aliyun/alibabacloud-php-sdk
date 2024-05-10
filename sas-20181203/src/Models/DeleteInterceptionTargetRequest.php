<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteInterceptionTargetRequest extends Model
{
    /**
     * @description The IDs of the network objects that you want to remove. You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the IDs of the network objects.
     *
     * This parameter is required.
     * @example 1,11,111
     *
     * @var string
     */
    public $targetIds;
    protected $_name = [
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInterceptionTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetIds'])) {
            $model->targetIds = $map['TargetIds'];
        }

        return $model;
    }
}
