<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OperateImageVulRequest extends Model
{
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
    public $type;
    protected $_name = [
        'info'        => 'Info',
        'operateType' => 'OperateType',
        'type'        => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
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
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
