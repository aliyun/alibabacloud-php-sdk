<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileProtectRemarkRequest extends Model
{
    /**
     * @description The ID of the event.
     *
     * @example 1764
     *
     * @var int
     */
    public $id;

    /**
     * @description The remarks.
     *
     * @var string[]
     */
    public $remark;
    protected $_name = [
        'id'     => 'Id',
        'remark' => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileProtectRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Remark'])) {
            if (!empty($map['Remark'])) {
                $model->remark = $map['Remark'];
            }
        }

        return $model;
    }
}
