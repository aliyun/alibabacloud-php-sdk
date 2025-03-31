<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerStagingDeployStatusResponseBody;

use AlibabaCloud\Dara\Model;

class podRestartState extends Model
{
    /**
     * @var string
     */
    public $lastTerminatedReason;

    /**
     * @var int
     */
    public $restartCount;
    protected $_name = [
        'lastTerminatedReason' => 'LastTerminatedReason',
        'restartCount' => 'RestartCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastTerminatedReason) {
            $res['LastTerminatedReason'] = $this->lastTerminatedReason;
        }

        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
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
        if (isset($map['LastTerminatedReason'])) {
            $model->lastTerminatedReason = $map['LastTerminatedReason'];
        }

        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }

        return $model;
    }
}
