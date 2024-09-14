<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class SessionClusterRunningInfo extends Model
{
    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var string[]
     */
    public $referenceDeploymentIds;

    /**
     * @var int
     */
    public $startedAt;
    protected $_name = [
        'lastUpdateTime'         => 'lastUpdateTime',
        'referenceDeploymentIds' => 'referenceDeploymentIds',
        'startedAt'              => 'startedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastUpdateTime) {
            $res['lastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->referenceDeploymentIds) {
            $res['referenceDeploymentIds'] = $this->referenceDeploymentIds;
        }
        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SessionClusterRunningInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lastUpdateTime'])) {
            $model->lastUpdateTime = $map['lastUpdateTime'];
        }
        if (isset($map['referenceDeploymentIds'])) {
            if (!empty($map['referenceDeploymentIds'])) {
                $model->referenceDeploymentIds = $map['referenceDeploymentIds'];
            }
        }
        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        return $model;
    }
}
