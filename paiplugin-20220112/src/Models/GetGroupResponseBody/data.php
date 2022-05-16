<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 关联算法，人群来源为算法。
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 人群数量。
     *
     * @var int
     */
    public $amount;

    /**
     * @description 手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。
     *
     * @var string
     */
    public $column;

    /**
     * @description 创建时间 (UTC+8)。
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 过滤条件，人群来源为MaxCompute时可指定。
     *
     * @var string
     */
    public $filter;

    /**
     * @description 人群Id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 预测任务Id，人群来源为算法。
     *
     * @var string
     */
    public $inferenceJobId;

    /**
     * @description 人群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否包含手机号，包含手机号的人群可用于触达计划。
     *
     * @var bool
     */
    public $phoneNumber;

    /**
     * @description MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。
     *
     * @var string
     */
    public $project;

    /**
     * @description 人群备注。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 人群来源。
     * - 4: 算法。
     * @var int
     */
    public $source;

    /**
     * @description 人群状态。
     * - 2: 未通过。
     * @var int
     */
    public $status;

    /**
     * @description MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。
     *
     * @var string
     */
    public $table;

    /**
     * @description 文本，人群来源为文本时需指定。
     *
     * @var string
     */
    public $text;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @var string
     */
    public $updatedTime;

    /**
     * @description 文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'amount'         => 'Amount',
        'column'         => 'Column',
        'createdTime'    => 'CreatedTime',
        'filter'         => 'Filter',
        'id'             => 'Id',
        'inferenceJobId' => 'InferenceJobId',
        'name'           => 'Name',
        'phoneNumber'    => 'PhoneNumber',
        'project'        => 'Project',
        'remark'         => 'Remark',
        'source'         => 'Source',
        'status'         => 'Status',
        'table'          => 'Table',
        'text'           => 'Text',
        'updatedTime'    => 'UpdatedTime',
        'uri'            => 'Uri',
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
        if (null !== $this->inferenceJobId) {
            $res['InferenceJobId'] = $this->inferenceJobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
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
        if (isset($map['InferenceJobId'])) {
            $model->inferenceJobId = $map['InferenceJobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
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
