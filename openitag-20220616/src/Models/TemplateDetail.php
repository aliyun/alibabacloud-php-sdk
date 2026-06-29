<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateDetail\viewConfigs;

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
        'abandonReasons' => 'AbandonReasons',
        'classify' => 'Classify',
        'creator' => 'Creator',
        'description' => 'Description',
        'exif' => 'Exif',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'modifier' => 'Modifier',
        'questionConfigs' => 'QuestionConfigs',
        'sharedMode' => 'SharedMode',
        'status' => 'Status',
        'tags' => 'Tags',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'tenantId' => 'TenantId',
        'type' => 'Type',
        'viewConfigs' => 'ViewConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->abandonReasons)) {
            Model::validateArray($this->abandonReasons);
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        if (\is_array($this->questionConfigs)) {
            Model::validateArray($this->questionConfigs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->viewConfigs) {
            $this->viewConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonReasons) {
            if (\is_array($this->abandonReasons)) {
                $res['AbandonReasons'] = [];
                $n1 = 0;
                foreach ($this->abandonReasons as $item1) {
                    $res['AbandonReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->questionConfigs) {
            if (\is_array($this->questionConfigs)) {
                $res['QuestionConfigs'] = [];
                $n1 = 0;
                foreach ($this->questionConfigs as $item1) {
                    $res['QuestionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['ViewConfigs'] = null !== $this->viewConfigs ? $this->viewConfigs->toArray($noStream) : $this->viewConfigs;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonReasons'])) {
            if (!empty($map['AbandonReasons'])) {
                $model->abandonReasons = [];
                $n1 = 0;
                foreach ($map['AbandonReasons'] as $item1) {
                    $model->abandonReasons[$n1] = $item1;
                    ++$n1;
                }
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
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['QuestionConfigs'] as $item1) {
                    $model->questionConfigs[$n1] = QuestionPlugin::fromMap($item1);
                    ++$n1;
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
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
