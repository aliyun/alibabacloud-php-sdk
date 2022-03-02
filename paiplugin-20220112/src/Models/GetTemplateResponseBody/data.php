<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 模板内容。
     *
     * @var string
     */
    public $content;

    /**
     * @description 创建时间 (UTC+8)。
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 申请说明。
     *
     * @var string
     */
    public $description;

    /**
     * @description Id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 签名名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 审核意见。
     *
     * @var string
     */
    public $reason;

    /**
     * @description 签名Id。
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 审核状态。
     * - 2 : 审核不通过。
     * @var int
     */
    public $status;

    /**
     * @description 模板Code。
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板类型。
     * 2：推广短信。
     * @var int
     */
    public $type;

    /**
     * @description 更新时间 (UTC+8)。
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
