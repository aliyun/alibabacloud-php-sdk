<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockProcessStatusRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $dealAll;

    /**
     * @example [{"processPath":"/etc/test1","uuid":"0c1714dc-f7a3-4265-8364-7aa3fce8****"},{"processPath":"/etc/test2","uuid":"1cc45e7d-7698-4b2c-89d8-e8cba407****"}]
     *
     * @var string
     */
    public $operateInfo;

    /**
     * @var string[]
     */
    public $processPath;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
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
