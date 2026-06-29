<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail;

use AlibabaCloud\Dara\Model;

class taskTemplateConfig extends Model
{
    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var mixed[]
     */
    public $robotConfig;

    /**
     * @var string[]
     */
    public $selectQuestions;

    /**
     * @var mixed[]
     */
    public $templateOptionMap;

    /**
     * @var string
     */
    public $templateRelationId;
    protected $_name = [
        'exif' => 'Exif',
        'resourceKey' => 'ResourceKey',
        'robotConfig' => 'RobotConfig',
        'selectQuestions' => 'SelectQuestions',
        'templateOptionMap' => 'TemplateOptionMap',
        'templateRelationId' => 'TemplateRelationId',
    ];

    public function validate()
    {
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->robotConfig)) {
            Model::validateArray($this->robotConfig);
        }
        if (\is_array($this->selectQuestions)) {
            Model::validateArray($this->selectQuestions);
        }
        if (\is_array($this->templateOptionMap)) {
            Model::validateArray($this->templateOptionMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceKey) {
            $res['ResourceKey'] = $this->resourceKey;
        }

        if (null !== $this->robotConfig) {
            if (\is_array($this->robotConfig)) {
                $res['RobotConfig'] = [];
                foreach ($this->robotConfig as $key1 => $value1) {
                    $res['RobotConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->selectQuestions) {
            if (\is_array($this->selectQuestions)) {
                $res['SelectQuestions'] = [];
                $n1 = 0;
                foreach ($this->selectQuestions as $item1) {
                    $res['SelectQuestions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateOptionMap) {
            if (\is_array($this->templateOptionMap)) {
                $res['TemplateOptionMap'] = [];
                foreach ($this->templateOptionMap as $key1 => $value1) {
                    $res['TemplateOptionMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateRelationId) {
            $res['TemplateRelationId'] = $this->templateRelationId;
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
        if (isset($map['Exif'])) {
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceKey'])) {
            $model->resourceKey = $map['ResourceKey'];
        }

        if (isset($map['RobotConfig'])) {
            if (!empty($map['RobotConfig'])) {
                $model->robotConfig = [];
                foreach ($map['RobotConfig'] as $key1 => $value1) {
                    $model->robotConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['SelectQuestions'])) {
            if (!empty($map['SelectQuestions'])) {
                $model->selectQuestions = [];
                $n1 = 0;
                foreach ($map['SelectQuestions'] as $item1) {
                    $model->selectQuestions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateOptionMap'])) {
            if (!empty($map['TemplateOptionMap'])) {
                $model->templateOptionMap = [];
                foreach ($map['TemplateOptionMap'] as $key1 => $value1) {
                    $model->templateOptionMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateRelationId'])) {
            $model->templateRelationId = $map['TemplateRelationId'];
        }

        return $model;
    }
}
