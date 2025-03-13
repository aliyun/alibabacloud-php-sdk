<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitAsyncTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2daaa2e0c209xb26acb97009ea77bd4b_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example MaterialDocumentUpload
     *
     * @var string
     */
    public $taskCode;

    /**
     * @example 2023-10-14 14:30:00
     *
     * @var string
     */
    public $taskExecuteTime;

    /**
     * @example 任务名称
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 任务提交参数
     *
     * @var string
     */
    public $taskParam;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'taskCode' => 'TaskCode',
        'taskExecuteTime' => 'TaskExecuteTime',
        'taskName' => 'TaskName',
        'taskParam' => 'TaskParam',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }
        if (null !== $this->taskExecuteTime) {
            $res['TaskExecuteTime'] = $this->taskExecuteTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }
        if (isset($map['TaskExecuteTime'])) {
            $model->taskExecuteTime = $map['TaskExecuteTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        return $model;
    }
}
