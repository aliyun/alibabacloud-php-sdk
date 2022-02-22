<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 算法名称
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 人群数量
     *
     * @var int
     */
    public $amount;

    /**
     * @description 手机号列名
     *
     * @var string
     */
    public $column;

    /**
     * @description 创建时间 (UTC+8)
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description ODPS过滤语句
     *
     * @var string
     */
    public $filter;

    /**
     * @description 人群Id
     *
     * @var string
     */
    public $id;

    /**
     * @description 推理任务
     *
     * @var string
     */
    public $inferenceJob;

    /**
     * @description 人群名称
     *
     * @var string
     */
    public $name;

    /**
     * @description ODPS项目名
     *
     * @var string
     */
    public $project;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 人群来源
     * - 4: Algorithm，由算法预测生成
     * @var int
     */
    public $source;

    /**
     * @description 人群状态
     *
     * @var int
     */
    public $status;

    /**
     * @description ODPS表名
     *
     * @var string
     */
    public $table;

    /**
     * @description 文本
     *
     * @var string
     */
    public $text;

    /**
     * @description 更新时间 (UTC+8)
     *
     * @var string
     */
    public $updatedTime;

    /**
     * @description 文件地址
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'amount'       => 'Amount',
        'column'       => 'Column',
        'createdTime'  => 'CreatedTime',
        'filter'       => 'Filter',
        'id'           => 'Id',
        'inferenceJob' => 'InferenceJob',
        'name'         => 'Name',
        'project'      => 'Project',
        'remark'       => 'Remark',
        'source'       => 'Source',
        'status'       => 'Status',
        'table'        => 'Table',
        'text'         => 'Text',
        'updatedTime'  => 'UpdatedTime',
        'uri'          => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inferenceJob) {
            $res['InferenceJob'] = $this->inferenceJob;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InferenceJob'])) {
            $model->inferenceJob = $map['InferenceJob'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
