<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        'lastUpdateTime' => 'lastUpdateTime',
        'referenceDeploymentIds' => 'referenceDeploymentIds',
        'startedAt' => 'startedAt',
    ];

    public function validate()
    {
        if (\is_array($this->referenceDeploymentIds)) {
            Model::validateArray($this->referenceDeploymentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastUpdateTime) {
            $res['lastUpdateTime'] = $this->lastUpdateTime;
        }

        if (null !== $this->referenceDeploymentIds) {
            if (\is_array($this->referenceDeploymentIds)) {
                $res['referenceDeploymentIds'] = [];
                $n1 = 0;
                foreach ($this->referenceDeploymentIds as $item1) {
                    $res['referenceDeploymentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
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
        if (isset($map['lastUpdateTime'])) {
            $model->lastUpdateTime = $map['lastUpdateTime'];
        }

        if (isset($map['referenceDeploymentIds'])) {
            if (!empty($map['referenceDeploymentIds'])) {
                $model->referenceDeploymentIds = [];
                $n1 = 0;
                foreach ($map['referenceDeploymentIds'] as $item1) {
                    $model->referenceDeploymentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        return $model;
    }
}
