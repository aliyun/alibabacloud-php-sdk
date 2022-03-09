<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 任务id
     *
     * @var int
     */
    public $id;

    /**
     * @description 模型状态
     *
     * @var int
     */
    public $modelingStatus;

    /**
     * @description 阶段
     *
     * @var string
     */
    public $phase;
    protected $_name = [
        'id'             => 'Id',
        'modelingStatus' => 'ModelingStatus',
        'phase'          => 'Phase',
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
        if (null !== $this->modelingStatus) {
            $res['ModelingStatus'] = $this->modelingStatus;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
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
        if (isset($map['ModelingStatus'])) {
            $model->modelingStatus = $map['ModelingStatus'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        return $model;
    }
}
