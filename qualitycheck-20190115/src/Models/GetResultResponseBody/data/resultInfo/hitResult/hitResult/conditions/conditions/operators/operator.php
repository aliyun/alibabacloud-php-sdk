<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;
use AlibabaCloud\Tea\Model;

class operator extends Model
{
    /**
     * @description 主键id
     *
     * @var int
     */
    public $id;

    /**
     * @description 算子名
     *
     * @var string
     */
    public $name;

    /**
     * @description 可能是主键id，也可能是前端生成的id
     *
     * @var string
     */
    public $oid;

    /**
     * @description 算子参数
     *
     * @var param
     */
    public $param;

    /**
     * @description 算子类别
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'    => 'Id',
        'name'  => 'Name',
        'oid'   => 'Oid',
        'param' => 'Param',
        'type'  => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Oid'])) {
            $model->oid = $map['Oid'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
