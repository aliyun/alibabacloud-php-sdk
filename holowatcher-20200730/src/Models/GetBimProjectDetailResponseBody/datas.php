<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectDetailResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 模型构件
     *
     * @var string[]
     */
    public $component;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @description 任务id（项目id）
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modelingStatus;

    /**
     * @description 项目名称
     *
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
     * @description 备注
     *
     * @var string
     */
    public $remarks;

    /**
     * @var int
     */
    public $renderable;

    /**
     * @var string
     */
    public $status;

    /**
     * @description 租户id
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description 图纸转换状态
     *
     * @var int
     */
    public $transStatus;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'component'      => 'Component',
        'createTime'     => 'CreateTime',
        'id'             => 'Id',
        'modelingStatus' => 'ModelingStatus',
        'name'           => 'Name',
        'phase'          => 'Phase',
        'remarks'        => 'Remarks',
        'renderable'     => 'Renderable',
        'status'         => 'Status',
        'tenantId'       => 'TenantId',
        'transStatus'    => 'TransStatus',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->renderable) {
            $res['Renderable'] = $this->renderable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->transStatus) {
            $res['TransStatus'] = $this->transStatus;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Renderable'])) {
            $model->renderable = $map['Renderable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TransStatus'])) {
            $model->transStatus = $map['TransStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
