<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Tea\Model;

class baseInfo extends Model
{
    /**
     * @example 张三
     *
     * @var string
     */
    public $createName;

    /**
     * @example 里斯
     *
     * @var string
     */
    public $modifyName;

    /**
     * @example 保存去压测
     *
     * @var string
     */
    public $operateType;

    /**
     * @example test-person
     *
     * @var string
     */
    public $principal;

    /**
     * @example 小心压测
     *
     * @var string
     */
    public $remark;

    /**
     * @example create
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'createName'  => 'CreateName',
        'modifyName'  => 'ModifyName',
        'operateType' => 'OperateType',
        'principal'   => 'Principal',
        'remark'      => 'Remark',
        'resource'    => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createName) {
            $res['CreateName'] = $this->createName;
        }
        if (null !== $this->modifyName) {
            $res['ModifyName'] = $this->modifyName;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->principal) {
            $res['Principal'] = $this->principal;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateName'])) {
            $model->createName = $map['CreateName'];
        }
        if (isset($map['ModifyName'])) {
            $model->modifyName = $map['ModifyName'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Principal'])) {
            $model->principal = $map['Principal'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
