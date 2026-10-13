<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $appliedTemplateVersion;

    /**
     * @var string
     */
    public $latestTemplateVersion;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $templateInputSchema;

    /**
     * @var bool
     */
    public $updateAvailable;
    protected $_name = [
        'appliedTemplateVersion' => 'appliedTemplateVersion',
        'latestTemplateVersion' => 'latestTemplateVersion',
        'schemaVersion' => 'schemaVersion',
        'templateInputSchema' => 'templateInputSchema',
        'updateAvailable' => 'updateAvailable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedTemplateVersion) {
            $res['appliedTemplateVersion'] = $this->appliedTemplateVersion;
        }

        if (null !== $this->latestTemplateVersion) {
            $res['latestTemplateVersion'] = $this->latestTemplateVersion;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->templateInputSchema) {
            $res['templateInputSchema'] = $this->templateInputSchema;
        }

        if (null !== $this->updateAvailable) {
            $res['updateAvailable'] = $this->updateAvailable;
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
        if (isset($map['appliedTemplateVersion'])) {
            $model->appliedTemplateVersion = $map['appliedTemplateVersion'];
        }

        if (isset($map['latestTemplateVersion'])) {
            $model->latestTemplateVersion = $map['latestTemplateVersion'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['templateInputSchema'])) {
            $model->templateInputSchema = $map['templateInputSchema'];
        }

        if (isset($map['updateAvailable'])) {
            $model->updateAvailable = $map['updateAvailable'];
        }

        return $model;
    }
}
