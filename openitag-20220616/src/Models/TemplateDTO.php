<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateDTO\viewConfigs;

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
        'classify' => 'Classify',
        'description' => 'Description',
        'exif' => 'Exif',
        'questionConfigs' => 'QuestionConfigs',
        'robotConfigs' => 'RobotConfigs',
        'sharedMode' => 'SharedMode',
        'tags' => 'Tags',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'viewConfigs' => 'ViewConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->questionConfigs)) {
            Model::validateArray($this->questionConfigs);
        }
        if (\is_array($this->robotConfigs)) {
            Model::validateArray($this->robotConfigs);
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
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
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

        if (null !== $this->robotConfigs) {
            if (\is_array($this->robotConfigs)) {
                $res['RobotConfigs'] = [];
                $n1 = 0;
                foreach ($this->robotConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['RobotConfigs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['RobotConfigs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->sharedMode) {
            $res['SharedMode'] = $this->sharedMode;
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
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
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

        if (isset($map['RobotConfigs'])) {
            if (!empty($map['RobotConfigs'])) {
                $model->robotConfigs = [];
                $n1 = 0;
                foreach ($map['RobotConfigs'] as $item1) {
                    if (!empty($item1)) {
                        $model->robotConfigs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->robotConfigs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['SharedMode'])) {
            $model->sharedMode = $map['SharedMode'];
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

        if (isset($map['ViewConfigs'])) {
            $model->viewConfigs = viewConfigs::fromMap($map['ViewConfigs']);
        }

        return $model;
    }
}
