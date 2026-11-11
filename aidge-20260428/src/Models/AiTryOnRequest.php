<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class AiTryOnRequest extends Model
{
    /**
     * @var string
     */
    public $clothImageUrl;

    /**
     * @var string
     */
    public $clothType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $modelImageUrl;

    /**
     * @var string
     */
    public $modelTemplateUrl;

    /**
     * @var string
     */
    public $poseTemplateUrl;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $tryonType;
    protected $_name = [
        'clothImageUrl' => 'ClothImageUrl',
        'clothType' => 'ClothType',
        'mode' => 'Mode',
        'modelImageUrl' => 'ModelImageUrl',
        'modelTemplateUrl' => 'ModelTemplateUrl',
        'poseTemplateUrl' => 'PoseTemplateUrl',
        'ratio' => 'Ratio',
        'resolution' => 'Resolution',
        'tryonType' => 'TryonType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothImageUrl) {
            $res['ClothImageUrl'] = $this->clothImageUrl;
        }

        if (null !== $this->clothType) {
            $res['ClothType'] = $this->clothType;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->modelImageUrl) {
            $res['ModelImageUrl'] = $this->modelImageUrl;
        }

        if (null !== $this->modelTemplateUrl) {
            $res['ModelTemplateUrl'] = $this->modelTemplateUrl;
        }

        if (null !== $this->poseTemplateUrl) {
            $res['PoseTemplateUrl'] = $this->poseTemplateUrl;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->tryonType) {
            $res['TryonType'] = $this->tryonType;
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
        if (isset($map['ClothImageUrl'])) {
            $model->clothImageUrl = $map['ClothImageUrl'];
        }

        if (isset($map['ClothType'])) {
            $model->clothType = $map['ClothType'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ModelImageUrl'])) {
            $model->modelImageUrl = $map['ModelImageUrl'];
        }

        if (isset($map['ModelTemplateUrl'])) {
            $model->modelTemplateUrl = $map['ModelTemplateUrl'];
        }

        if (isset($map['PoseTemplateUrl'])) {
            $model->poseTemplateUrl = $map['PoseTemplateUrl'];
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['TryonType'])) {
            $model->tryonType = $map['TryonType'];
        }

        return $model;
    }
}
