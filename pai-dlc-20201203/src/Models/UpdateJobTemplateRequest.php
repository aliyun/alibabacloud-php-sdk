<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobTemplateRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $constraints;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var bool
     */
    public $setAsDefault;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'constraints' => 'Constraints',
        'content' => 'Content',
        'description' => 'Description',
        'metadata' => 'Metadata',
        'setAsDefault' => 'SetAsDefault',
        'templateName' => 'TemplateName',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->constraints)) {
            Model::validateArray($this->constraints);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraints) {
            if (\is_array($this->constraints)) {
                $res['Constraints'] = [];
                foreach ($this->constraints as $key1 => $value1) {
                    $res['Constraints'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->setAsDefault) {
            $res['SetAsDefault'] = $this->setAsDefault;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['Constraints'])) {
            if (!empty($map['Constraints'])) {
                $model->constraints = [];
                foreach ($map['Constraints'] as $key1 => $value1) {
                    $model->constraints[$key1] = $value1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
