<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CreatesSlotTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $adSlotTemplateTitle;

    /**
     * @var string
     */
    public $adSlotType;

    /**
     * @var string
     */
    public $adSlotTemplateName;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $adSlotTemplateDescription;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $adSlotTemplatePic;

    /**
     * @var string
     */
    public $adSlotTemplatePreview;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $adSlotTemplateId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'adSlotTemplateTitle'       => 'AdSlotTemplateTitle',
        'adSlotType'                => 'AdSlotType',
        'adSlotTemplateName'        => 'AdSlotTemplateName',
        'extInfo'                   => 'ExtInfo',
        'adSlotTemplateDescription' => 'AdSlotTemplateDescription',
        'version'                   => 'Version',
        'adSlotTemplatePic'         => 'AdSlotTemplatePic',
        'adSlotTemplatePreview'     => 'AdSlotTemplatePreview',
        'templateConfig'            => 'TemplateConfig',
        'adSlotTemplateId'          => 'AdSlotTemplateId',
        'modifyTime'                => 'ModifyTime',
        'tenantId'                  => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->adSlotTemplateTitle) {
            $res['AdSlotTemplateTitle'] = $this->adSlotTemplateTitle;
        }
        if (null !== $this->adSlotType) {
            $res['AdSlotType'] = $this->adSlotType;
        }
        if (null !== $this->adSlotTemplateName) {
            $res['AdSlotTemplateName'] = $this->adSlotTemplateName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->adSlotTemplateDescription) {
            $res['AdSlotTemplateDescription'] = $this->adSlotTemplateDescription;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->adSlotTemplatePic) {
            $res['AdSlotTemplatePic'] = $this->adSlotTemplatePic;
        }
        if (null !== $this->adSlotTemplatePreview) {
            $res['AdSlotTemplatePreview'] = $this->adSlotTemplatePreview;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->adSlotTemplateId) {
            $res['AdSlotTemplateId'] = $this->adSlotTemplateId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AdSlotTemplateTitle'])) {
            $model->adSlotTemplateTitle = $map['AdSlotTemplateTitle'];
        }
        if (isset($map['AdSlotType'])) {
            $model->adSlotType = $map['AdSlotType'];
        }
        if (isset($map['AdSlotTemplateName'])) {
            $model->adSlotTemplateName = $map['AdSlotTemplateName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['AdSlotTemplateDescription'])) {
            $model->adSlotTemplateDescription = $map['AdSlotTemplateDescription'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['AdSlotTemplatePic'])) {
            $model->adSlotTemplatePic = $map['AdSlotTemplatePic'];
        }
        if (isset($map['AdSlotTemplatePreview'])) {
            $model->adSlotTemplatePreview = $map['AdSlotTemplatePreview'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['AdSlotTemplateId'])) {
            $model->adSlotTemplateId = $map['AdSlotTemplateId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
