<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Dara\Model;

class baseInfo extends Model
{
    /**
     * @var string
     */
    public $createName;

    /**
     * @var string
     */
    public $modifyName;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $principal;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resource;
    protected $_name = [
        'createName' => 'CreateName',
        'modifyName' => 'ModifyName',
        'operateType' => 'OperateType',
        'principal' => 'Principal',
        'remark' => 'Remark',
        'resource' => 'Resource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
