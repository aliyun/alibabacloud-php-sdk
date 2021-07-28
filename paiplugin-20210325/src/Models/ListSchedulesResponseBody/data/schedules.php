<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListSchedulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @description 创建时间 (UTC+8)
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description ID
     *
     * @var string
     */
    public $ID;

    /**
     * @description 发送计划名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 发布时间 (UTC+8)
     *
     * @var string
     */
    public $sendTime;

    /**
     * @description 签名ID
     *
     * @var string
     */
    public $signatureID;

    /**
     * @description 状态
     * - 5: 发送失败
     * @var int
     */
    public $status;

    /**
     * @description 模板ID
     *
     * @var string
     */
    public $templateID;

    /**
     * @description 更新时间 (UTC+8)
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'ID'          => 'ID',
        'name'        => 'Name',
        'sendTime'    => 'SendTime',
        'signatureID' => 'SignatureID',
        'status'      => 'Status',
        'templateID'  => 'TemplateID',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->signatureID) {
            $res['SignatureID'] = $this->signatureID;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateID) {
            $res['TemplateID'] = $this->templateID;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SignatureID'])) {
            $model->signatureID = $map['SignatureID'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateID'])) {
            $model->templateID = $map['TemplateID'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
