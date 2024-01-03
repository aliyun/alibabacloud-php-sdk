<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail;

use AlibabaCloud\Tea\Model;

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
        'exif'               => 'Exif',
        'resourceKey'        => 'ResourceKey',
        'robotConfig'        => 'RobotConfig',
        'selectQuestions'    => 'SelectQuestions',
        'templateOptionMap'  => 'TemplateOptionMap',
        'templateRelationId' => 'TemplateRelationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->resourceKey) {
            $res['ResourceKey'] = $this->resourceKey;
        }
        if (null !== $this->robotConfig) {
            $res['RobotConfig'] = $this->robotConfig;
        }
        if (null !== $this->selectQuestions) {
            $res['SelectQuestions'] = $this->selectQuestions;
        }
        if (null !== $this->templateOptionMap) {
            $res['TemplateOptionMap'] = $this->templateOptionMap;
        }
        if (null !== $this->templateRelationId) {
            $res['TemplateRelationId'] = $this->templateRelationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskTemplateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['ResourceKey'])) {
            $model->resourceKey = $map['ResourceKey'];
        }
        if (isset($map['RobotConfig'])) {
            $model->robotConfig = $map['RobotConfig'];
        }
        if (isset($map['SelectQuestions'])) {
            if (!empty($map['SelectQuestions'])) {
                $model->selectQuestions = $map['SelectQuestions'];
            }
        }
        if (isset($map['TemplateOptionMap'])) {
            $model->templateOptionMap = $map['TemplateOptionMap'];
        }
        if (isset($map['TemplateRelationId'])) {
            $model->templateRelationId = $map['TemplateRelationId'];
        }

        return $model;
    }
}
