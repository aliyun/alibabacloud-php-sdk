<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkflowTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerCount;

    /**
     * @var int
     */
    public $reviewStepCount;

    /**
     * @var int
     */
    public $stepCount;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'description' => 'description',
        'gmtModified' => 'gmtModified',
        'name' => 'name',
        'ownerCount' => 'ownerCount',
        'reviewStepCount' => 'reviewStepCount',
        'stepCount' => 'stepCount',
        'templateId' => 'templateId',
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

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ownerCount) {
            $res['ownerCount'] = $this->ownerCount;
        }

        if (null !== $this->reviewStepCount) {
            $res['reviewStepCount'] = $this->reviewStepCount;
        }

        if (null !== $this->stepCount) {
            $res['stepCount'] = $this->stepCount;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ownerCount'])) {
            $model->ownerCount = $map['ownerCount'];
        }

        if (isset($map['reviewStepCount'])) {
            $model->reviewStepCount = $map['reviewStepCount'];
        }

        if (isset($map['stepCount'])) {
            $model->stepCount = $map['stepCount'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
