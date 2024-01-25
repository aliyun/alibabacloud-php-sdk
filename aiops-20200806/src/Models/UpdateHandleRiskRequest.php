<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateHandleRiskRequest extends Model
{
    /**
     * @var string
     */
    public $patrolDetailIds;

    /**
     * @var int
     */
    public $patrolId;

    /**
     * @var string
     */
    public $switchFrontOperaUid;
    protected $_name = [
        'patrolDetailIds'     => 'PatrolDetailIds',
        'patrolId'            => 'PatrolId',
        'switchFrontOperaUid' => 'SwitchFrontOperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patrolDetailIds) {
            $res['PatrolDetailIds'] = $this->patrolDetailIds;
        }
        if (null !== $this->patrolId) {
            $res['PatrolId'] = $this->patrolId;
        }
        if (null !== $this->switchFrontOperaUid) {
            $res['SwitchFrontOperaUid'] = $this->switchFrontOperaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHandleRiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PatrolDetailIds'])) {
            $model->patrolDetailIds = $map['PatrolDetailIds'];
        }
        if (isset($map['PatrolId'])) {
            $model->patrolId = $map['PatrolId'];
        }
        if (isset($map['SwitchFrontOperaUid'])) {
            $model->switchFrontOperaUid = $map['SwitchFrontOperaUid'];
        }

        return $model;
    }
}
