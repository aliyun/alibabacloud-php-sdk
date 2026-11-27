<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleTemplateBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $ruleConfigs;

    /**
     * @var string
     */
    public $scenes;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'description' => 'description',
        'labels' => 'labels',
        'ruleConfigs' => 'ruleConfigs',
        'scenes' => 'scenes',
        'schemaVersion' => 'schemaVersion',
        'status' => 'status',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }

        if (null !== $this->ruleConfigs) {
            $res['ruleConfigs'] = $this->ruleConfigs;
        }

        if (null !== $this->scenes) {
            $res['scenes'] = $this->scenes;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        if (isset($map['ruleConfigs'])) {
            $model->ruleConfigs = $map['ruleConfigs'];
        }

        if (isset($map['scenes'])) {
            $model->scenes = $map['scenes'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
