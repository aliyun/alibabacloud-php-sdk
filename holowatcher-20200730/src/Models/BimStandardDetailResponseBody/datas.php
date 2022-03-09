<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardDetailResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 门窗表配置
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @description 门窗表图纸id
     *
     * @var int
     */
    public $id;

    /**
     * @description 门窗表图纸状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'config' => 'Config',
        'id'     => 'Id',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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
