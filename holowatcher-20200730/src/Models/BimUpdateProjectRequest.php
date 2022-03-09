<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class BimUpdateProjectRequest extends Model
{
    /**
     * @var mixed[][]
     */
    public $component;

    /**
     * @var int
     */
    public $id;

    /**
     * @description 项目名
     *
     * @var string
     */
    public $name;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remarks;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'component' => 'Component',
        'id'        => 'Id',
        'name'      => 'Name',
        'remarks'   => 'Remarks',
        'type'      => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return BimUpdateProjectRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
