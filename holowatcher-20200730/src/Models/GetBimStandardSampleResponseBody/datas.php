<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponseBody\datas\data;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 大样结构板数据
     *
     * @var data
     */
    public $data;

    /**
     * @description 标准图纸id
     *
     * @var int
     */
    public $id;

    /**
     * @description 图纸状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'data'   => 'Data',
        'id'     => 'Id',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
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
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
