<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockProcessStatusRequest extends Model
{
    /**
     * @description Specifies whether to change the status of the process on multiple servers on which the process runs at the same time. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $dealAll;

    /**
     * @description The parameters required to change the status of multiple processes at a time. The value is in the JSON format.
     *
     * @example [{"processPath":"/etc/test1","uuid":"0c1714dc-f7a3-4265-8364-7aa3fce8****"},{"processPath":"/etc/test2","uuid":"1cc45e7d-7698-4b2c-89d8-e8cba407****"}]
     *
     * @var string
     */
    public $operateInfo;

    /**
     * @description The paths to the processes.
     *
     * @var string[]
     */
    public $processPath;

    /**
     * @description The status of the process. Valid values:
     *
     *   **0**: cancels adding the process to the process whitelist
     *   **1**: adds the process to the process whitelist
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUID of the server.
     *
     * @example bc8510e7-7327-4030-b75c-956e434d****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'dealAll'     => 'DealAll',
        'operateInfo' => 'OperateInfo',
        'processPath' => 'ProcessPath',
        'status'      => 'Status',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealAll) {
            $res['DealAll'] = $this->dealAll;
        }
        if (null !== $this->operateInfo) {
            $res['OperateInfo'] = $this->operateInfo;
        }
        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebLockProcessStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DealAll'])) {
            $model->dealAll = $map['DealAll'];
        }
        if (isset($map['OperateInfo'])) {
            $model->operateInfo = $map['OperateInfo'];
        }
        if (isset($map['ProcessPath'])) {
            if (!empty($map['ProcessPath'])) {
                $model->processPath = $map['ProcessPath'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
