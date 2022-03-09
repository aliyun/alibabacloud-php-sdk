<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimUpdateProjectResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 模型构件
     *
     * @var mixed[][]
     */
    public $component;

    /**
     * @description 任务id(项目id)
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modelingStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @description 阶段
     *
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'component'      => 'Component',
        'id'             => 'Id',
        'modelingStatus' => 'ModelingStatus',
        'name'           => 'Name',
        'phase'          => 'Phase',
        'remarks'        => 'Remarks',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelingStatus) {
            $res['ModelingStatus'] = $this->modelingStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Component'])) {
            if (!empty($map['Component'])) {
                $model->component = $map['Component'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelingStatus'])) {
            $model->modelingStatus = $map['ModelingStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
