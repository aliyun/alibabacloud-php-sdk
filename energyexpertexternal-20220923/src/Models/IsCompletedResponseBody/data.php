<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $taskKey;

    /**
     * @var string
     */
    public $taskShortResult;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'modifiedTime' => 'modifiedTime',
        'taskKey' => 'taskKey',
        'taskShortResult' => 'taskShortResult',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->taskKey) {
            $res['taskKey'] = $this->taskKey;
        }

        if (null !== $this->taskShortResult) {
            $res['taskShortResult'] = $this->taskShortResult;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['taskKey'])) {
            $model->taskKey = $map['taskKey'];
        }

        if (isset($map['taskShortResult'])) {
            $model->taskShortResult = $map['taskShortResult'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
