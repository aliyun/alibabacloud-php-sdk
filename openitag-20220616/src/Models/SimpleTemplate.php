<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SimpleTemplate extends Model
{
    /**
     * @example None
     *
     * @var string
     */
    public $abandonReasons;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-07-12 14:21:08
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2022-07-12 14:21:08
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example None
     *
     * @var string
     */
    public $sharedMode;

    /**
     * @example DRAFT
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @example 1546741431673270272
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 图片分割组合77aa
     *
     * @var string
     */
    public $templateName;

    /**
     * @example GARDAW134
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example CUSTOM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'abandonReasons'  => 'AbandonReasons',
        'description'     => 'Description',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'sharedMode'      => 'SharedMode',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'tenantId'        => 'TenantId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonReasons) {
            $res['AbandonReasons'] = $this->abandonReasons;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->sharedMode) {
            $res['SharedMode'] = $this->sharedMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonReasons'])) {
            $model->abandonReasons = $map['AbandonReasons'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['SharedMode'])) {
            $model->sharedMode = $map['SharedMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
