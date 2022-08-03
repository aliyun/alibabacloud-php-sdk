<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleDeletionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $deletionTaskId;
    protected $_name = [
        'deletionTaskId' => 'DeletionTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleDeletionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }

        return $model;
    }
}
