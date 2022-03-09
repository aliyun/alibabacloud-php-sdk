<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelStatusResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 转换模型id
     *
     * @var int
     */
    public $id;

    /**
     * @description 转换模型状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'     => 'Id',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
