<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateDTO\viewConfigs;
use AlibabaCloud\Tea\Model;

class TemplateDTO extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var QuestionPlugin[]
     */
    public $questionConfigs;

    /**
     * @var mixed[][]
     */
    public $robotConfigs;

    /**
     * @var string
     */
    public $sharedMode;

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
     * @var viewConfigs
     */
    public $viewConfigs;
    protected $_name = [
        'classify'        => 'Classify',
        'description'     => 'Description',
        'exif'            => 'Exif',
        'questionConfigs' => 'QuestionConfigs',
        'robotConfigs'    => 'RobotConfigs',
        'sharedMode'      => 'SharedMode',
        'tags'            => 'Tags',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'viewConfigs'     => 'ViewConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
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
        if (null !== $this->robotConfigs) {
            $res['RobotConfigs'] = $this->robotConfigs;
        }
        if (null !== $this->sharedMode) {
            $res['SharedMode'] = $this->sharedMode;
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
        if (null !== $this->viewConfigs) {
            $res['ViewConfigs'] = null !== $this->viewConfigs ? $this->viewConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
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
        if (isset($map['RobotConfigs'])) {
            if (!empty($map['RobotConfigs'])) {
                $model->robotConfigs = $map['RobotConfigs'];
            }
        }
        if (isset($map['SharedMode'])) {
            $model->sharedMode = $map['SharedMode'];
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
        if (isset($map['ViewConfigs'])) {
            $model->viewConfigs = viewConfigs::fromMap($map['ViewConfigs']);
        }

        return $model;
    }
}
