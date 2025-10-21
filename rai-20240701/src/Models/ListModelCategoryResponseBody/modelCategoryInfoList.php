<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListModelCategoryResponseBody;

use AlibabaCloud\Dara\Model;

class modelCategoryInfoList extends Model
{
    /**
     * @var int
     */
    public $contentSafeImageSupported;

    /**
     * @var int
     */
    public $contentSafeTextSupported;

    /**
     * @var int
     */
    public $modelCategoryId;

    /**
     * @var string
     */
    public $modelCategoryName;

    /**
     * @var int
     */
    public $modelSource;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $promptAttackTextSupported;

    /**
     * @var int
     */
    public $sensitiveTopicTextSupported;
    protected $_name = [
        'contentSafeImageSupported' => 'ContentSafeImageSupported',
        'contentSafeTextSupported' => 'ContentSafeTextSupported',
        'modelCategoryId' => 'ModelCategoryId',
        'modelCategoryName' => 'ModelCategoryName',
        'modelSource' => 'ModelSource',
        'priority' => 'Priority',
        'promptAttackTextSupported' => 'PromptAttackTextSupported',
        'sensitiveTopicTextSupported' => 'SensitiveTopicTextSupported',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentSafeImageSupported) {
            $res['ContentSafeImageSupported'] = $this->contentSafeImageSupported;
        }

        if (null !== $this->contentSafeTextSupported) {
            $res['ContentSafeTextSupported'] = $this->contentSafeTextSupported;
        }

        if (null !== $this->modelCategoryId) {
            $res['ModelCategoryId'] = $this->modelCategoryId;
        }

        if (null !== $this->modelCategoryName) {
            $res['ModelCategoryName'] = $this->modelCategoryName;
        }

        if (null !== $this->modelSource) {
            $res['ModelSource'] = $this->modelSource;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->promptAttackTextSupported) {
            $res['PromptAttackTextSupported'] = $this->promptAttackTextSupported;
        }

        if (null !== $this->sensitiveTopicTextSupported) {
            $res['SensitiveTopicTextSupported'] = $this->sensitiveTopicTextSupported;
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
        if (isset($map['ContentSafeImageSupported'])) {
            $model->contentSafeImageSupported = $map['ContentSafeImageSupported'];
        }

        if (isset($map['ContentSafeTextSupported'])) {
            $model->contentSafeTextSupported = $map['ContentSafeTextSupported'];
        }

        if (isset($map['ModelCategoryId'])) {
            $model->modelCategoryId = $map['ModelCategoryId'];
        }

        if (isset($map['ModelCategoryName'])) {
            $model->modelCategoryName = $map['ModelCategoryName'];
        }

        if (isset($map['ModelSource'])) {
            $model->modelSource = $map['ModelSource'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PromptAttackTextSupported'])) {
            $model->promptAttackTextSupported = $map['PromptAttackTextSupported'];
        }

        if (isset($map['SensitiveTopicTextSupported'])) {
            $model->sensitiveTopicTextSupported = $map['SensitiveTopicTextSupported'];
        }

        return $model;
    }
}
