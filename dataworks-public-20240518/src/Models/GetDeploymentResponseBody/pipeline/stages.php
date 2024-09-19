<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponseBody\pipeline;

use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @description 阶段代号
     *
     * @example DEV_CHECK
     *
     * @var string
     */
    public $code;

    /**
     * @description 阶段描述
     *
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @description 阶段信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 阶段名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 阶段状态
     *
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @description 步骤
     *
     * @example 1
     *
     * @var int
     */
    public $step;

    /**
     * @description 阶段类型
     *
     * @example BUILD
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'detail'      => 'Detail',
        'message'     => 'Message',
        'name'        => 'Name',
        'status'      => 'Status',
        'step'        => 'Step',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
