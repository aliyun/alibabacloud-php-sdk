<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CustomExtractionStrategy extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extractionPrompt;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $strategyType;

    /**
     * @var string
     */
    public $updatePrompt;
    protected $_name = [
        'description' => 'description',
        'extractionPrompt' => 'extractionPrompt',
        'strategyName' => 'strategyName',
        'strategyType' => 'strategyType',
        'updatePrompt' => 'updatePrompt',
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

        if (null !== $this->extractionPrompt) {
            $res['extractionPrompt'] = $this->extractionPrompt;
        }

        if (null !== $this->strategyName) {
            $res['strategyName'] = $this->strategyName;
        }

        if (null !== $this->strategyType) {
            $res['strategyType'] = $this->strategyType;
        }

        if (null !== $this->updatePrompt) {
            $res['updatePrompt'] = $this->updatePrompt;
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

        if (isset($map['extractionPrompt'])) {
            $model->extractionPrompt = $map['extractionPrompt'];
        }

        if (isset($map['strategyName'])) {
            $model->strategyName = $map['strategyName'];
        }

        if (isset($map['strategyType'])) {
            $model->strategyType = $map['strategyType'];
        }

        if (isset($map['updatePrompt'])) {
            $model->updatePrompt = $map['updatePrompt'];
        }

        return $model;
    }
}
