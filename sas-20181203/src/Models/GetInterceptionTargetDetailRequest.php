<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetInterceptionTargetDetailRequest extends Model
{
    /**
     * @description The ID of the network object.
     *
     * > You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the IDs of network objects.
     * @example 402008
     *
     * @var int
     */
    public $targetId;
    protected $_name = [
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterceptionTargetDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
