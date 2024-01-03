<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SimpleWorkforce extends Model
{
    /**
     * @var int[]
     */
    public $userIds;

    /**
     * @var int
     */
    public $workNodeId;
    protected $_name = [
        'userIds'    => 'UserIds',
        'workNodeId' => 'WorkNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->workNodeId) {
            $res['WorkNodeId'] = $this->workNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleWorkforce
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }
        if (isset($map['WorkNodeId'])) {
            $model->workNodeId = $map['WorkNodeId'];
        }

        return $model;
    }
}
