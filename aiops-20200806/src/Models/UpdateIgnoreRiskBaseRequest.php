<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateIgnoreRiskBaseRequest extends Model
{
    /**
     * @var string
     */
    public $handleDescribe;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $patrolDetailIds;

    /**
     * @var int
     */
    public $patrolId;
    protected $_name = [
        'handleDescribe'  => 'HandleDescribe',
        'operaUid'        => 'OperaUid',
        'patrolDetailIds' => 'PatrolDetailIds',
        'patrolId'        => 'PatrolId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handleDescribe) {
            $res['HandleDescribe'] = $this->handleDescribe;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->patrolDetailIds) {
            $res['PatrolDetailIds'] = $this->patrolDetailIds;
        }
        if (null !== $this->patrolId) {
            $res['PatrolId'] = $this->patrolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIgnoreRiskBaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HandleDescribe'])) {
            $model->handleDescribe = $map['HandleDescribe'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PatrolDetailIds'])) {
            $model->patrolDetailIds = $map['PatrolDetailIds'];
        }
        if (isset($map['PatrolId'])) {
            $model->patrolId = $map['PatrolId'];
        }

        return $model;
    }
}
