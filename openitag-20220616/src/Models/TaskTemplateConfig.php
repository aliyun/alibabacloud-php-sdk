<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class TaskTemplateConfig extends Model
{
    /**
     * @var string[]
     */
    public $exif;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string[]
     */
    public $selectQuestions;

    /**
     * @var TaskTemplateOptionConfig[]
     */
    public $templateOptionMap;

    /**
     * @var string
     */
    public $templateRelationId;
    protected $_name = [
        'exif'               => 'Exif',
        'resourceKey'        => 'ResourceKey',
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
        if (null !== $this->selectQuestions) {
            $res['SelectQuestions'] = $this->selectQuestions;
        }
        if (null !== $this->templateOptionMap) {
            $res['TemplateOptionMap'] = [];
            if (null !== $this->templateOptionMap && \is_array($this->templateOptionMap)) {
                foreach ($this->templateOptionMap as $key => $val) {
                    $res['TemplateOptionMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->templateRelationId) {
            $res['TemplateRelationId'] = $this->templateRelationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskTemplateConfig
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
