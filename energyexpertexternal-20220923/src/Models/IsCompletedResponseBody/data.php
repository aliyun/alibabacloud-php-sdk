<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Modified time in milliseconds, e.g. 1711438780000.
     *
     * @example 1711438780000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The unique key of this generation task.
     *
     * @example 550c2b7b-f2e0-4176-ab0a-53ea4b355721
     *
     * @var string
     */
    public $taskKey;

    /**
     * @description Unused temporarily.
     *
     * @example null
     *
     * @var string
     */
    public $taskShortResult;

    /**
     * @description The status of the report generation task. The possible values are `running`, `success`, and `error`, which mean generating, generating succeeded, and generating failed, respectively. If you encounter a result generation failure, check the model, correct the model, and then generate the result again.
     *
     * @example running
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'modifiedTime'    => 'modifiedTime',
        'taskKey'         => 'taskKey',
        'taskShortResult' => 'taskShortResult',
        'taskStatus'      => 'taskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
