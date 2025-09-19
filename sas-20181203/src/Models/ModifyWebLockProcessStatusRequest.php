<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyWebLockProcessStatusRequest extends Model
{
    /**
     * @var int
     */
    public $dealAll;

    /**
     * @var string
     */
    public $operateInfo;

    /**
     * @var string[]
     */
    public $processPath;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'dealAll' => 'DealAll',
        'operateInfo' => 'OperateInfo',
        'processPath' => 'ProcessPath',
        'status' => 'Status',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->processPath)) {
            Model::validateArray($this->processPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dealAll) {
            $res['DealAll'] = $this->dealAll;
        }

        if (null !== $this->operateInfo) {
            $res['OperateInfo'] = $this->operateInfo;
        }

        if (null !== $this->processPath) {
            if (\is_array($this->processPath)) {
                $res['ProcessPath'] = [];
                $n1 = 0;
                foreach ($this->processPath as $item1) {
                    $res['ProcessPath'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['DealAll'])) {
            $model->dealAll = $map['DealAll'];
        }

        if (isset($map['OperateInfo'])) {
            $model->operateInfo = $map['OperateInfo'];
        }

        if (isset($map['ProcessPath'])) {
            if (!empty($map['ProcessPath'])) {
                $model->processPath = [];
                $n1 = 0;
                foreach ($map['ProcessPath'] as $item1) {
                    $model->processPath[$n1] = $item1;
                    ++$n1;
                }
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
