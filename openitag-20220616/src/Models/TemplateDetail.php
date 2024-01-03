<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateDetail\viewConfigs;
use AlibabaCloud\Tea\Model;

class TemplateDetail extends Model
{
    /**
     * @var string[]
     */
    public $abandonReasons;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var SimpleUser
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var SimpleUser
     */
    public $modifier;

    /**
     * @var QuestionPlugin[]
     */
    public $questionConfigs;

    /**
     * @var string
     */
    public $sharedMode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var viewConfigs
     */
    public $viewConfigs;
    protected $_name = [
        'abandonReasons'  => 'AbandonReasons',
        'classify'        => 'Classify',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'exif'            => 'Exif',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'modifier'        => 'Modifier',
        'questionConfigs' => 'QuestionConfigs',
        'sharedMode'      => 'SharedMode',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'tenantId'        => 'TenantId',
        'type'            => 'Type',
        'viewConfigs'     => 'ViewConfigs',
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
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toMap() : null;
        }
        if (null !== $this->questionConfigs) {
            $res['QuestionConfigs'] = [];
            if (null !== $this->questionConfigs && \is_array($this->questionConfigs)) {
                $n = 0;
                foreach ($this->questionConfigs as $item) {
                    $res['QuestionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->viewConfigs) {
            $res['ViewConfigs'] = null !== $this->viewConfigs ? $this->viewConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonReasons'])) {
            if (!empty($map['AbandonReasons'])) {
                $model->abandonReasons = $map['AbandonReasons'];
            }
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Creator'])) {
            $model->creator = SimpleUser::fromMap($map['Creator']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = SimpleUser::fromMap($map['Modifier']);
        }
        if (isset($map['QuestionConfigs'])) {
            if (!empty($map['QuestionConfigs'])) {
                $model->questionConfigs = [];
                $n                      = 0;
                foreach ($map['QuestionConfigs'] as $item) {
                    $model->questionConfigs[$n++] = null !== $item ? QuestionPlugin::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ViewConfigs'])) {
            $model->viewConfigs = viewConfigs::fromMap($map['ViewConfigs']);
        }

        return $model;
    }
}
