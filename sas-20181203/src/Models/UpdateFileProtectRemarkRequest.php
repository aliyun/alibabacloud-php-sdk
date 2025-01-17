<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateFileProtectRemarkRequest extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string[]
     */
    public $remark;
    protected $_name = [
        'id'     => 'Id',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        if (\is_array($this->remark)) {
            Model::validateArray($this->remark);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->remark) {
            if (\is_array($this->remark)) {
                $res['Remark'] = [];
                $n1            = 0;
                foreach ($this->remark as $item1) {
                    $res['Remark'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Remark'])) {
            if (!empty($map['Remark'])) {
                $model->remark = [];
                $n1            = 0;
                foreach ($map['Remark'] as $item1) {
                    $model->remark[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
