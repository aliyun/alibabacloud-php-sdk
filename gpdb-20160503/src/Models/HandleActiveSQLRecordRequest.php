<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class HandleActiveSQLRecordRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var int
     */
    public $operateType;
    /**
     * @var string
     */
    public $pids;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'operateType'  => 'OperateType',
        'pids'         => 'Pids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }

        return $model;
    }
}
