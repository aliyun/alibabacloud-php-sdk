<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyOperateVulRequest extends Model
{
    /**
     * @var string
     */
    public $from;
    /**
     * @var string
     */
    public $info;
    /**
     * @var string
     */
    public $operateType;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'from'        => 'From',
        'info'        => 'Info',
        'operateType' => 'OperateType',
        'reason'      => 'Reason',
        'type'        => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
