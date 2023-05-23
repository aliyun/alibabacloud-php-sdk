<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 模板内容。
     *
     * @example 心仪的TA刚刚给你留言了
     *
     * @var string
     */
    public $content;

    /**
     * @description 创建时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 申请说明。
     *
     * @example 申请说明
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板Id。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $id;

    /**
     * @description 签名名称。
     *
     * @example 模板召回-20220101
     *
     * @var string
     */
    public $name;

    /**
     * @description 审核意见。
     *
     * @example 同意
     *
     * @var string
     */
    public $reason;

    /**
     * @description 签名Id。
     *
     * @example 5480e3e7-f578-42d2-8ce8-217dec75f2e6
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 审核状态。
     * - 2 : 审核不通过。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description 模板Code。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板类型。
     * - 2 : 推广短信。
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'content'      => 'Content',
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'id'           => 'Id',
        'name'         => 'Name',
        'reason'       => 'Reason',
        'signatureId'  => 'SignatureId',
        'status'       => 'Status',
        'templateCode' => 'TemplateCode',
        'type'         => 'Type',
        'updatedTime'  => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
