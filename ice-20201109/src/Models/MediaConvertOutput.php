<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertOutput extends Model
{
    /**
     * @var string
     */
    public $features;
    /**
     * @var string
     */
    public $name;
    /**
     * @var MediaObject
     */
    public $outputFile;
    /**
     * @var string
     */
    public $overrideParams;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'features'       => 'Features',
        'name'           => 'Name',
        'outputFile'     => 'OutputFile',
        'overrideParams' => 'OverrideParams',
        'priority'       => 'Priority',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->outputFile) {
            $this->outputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toArray($noStream) : $this->outputFile;
        }

        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputFile'])) {
            $model->outputFile = MediaObject::fromMap($map['OutputFile']);
        }

        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
