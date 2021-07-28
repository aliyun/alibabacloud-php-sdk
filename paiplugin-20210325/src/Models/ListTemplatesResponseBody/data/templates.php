<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListTemplatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description 模板内容，长度:2-30
     *
     * @var string
     */
    public $content;

    /**
     * @description 创建时间 (UTC+8)
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description ID UUID
     *
     * @var string
     */
    public $ID;

    /**
     * @description 签名名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 审核状态
     * - 2 : 审核不通过
     * @var int
     */
    public $status;

    /**
     * @description 模板Code
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 更新时间 (UTC+8)
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'content'      => 'Content',
        'createdTime'  => 'CreatedTime',
        'ID'           => 'ID',
        'name'         => 'Name',
        'status'       => 'Status',
        'templateCode' => 'TemplateCode',
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
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
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
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
