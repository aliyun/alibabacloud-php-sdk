<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class oppo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $deleteIntentData;

    /**
     * @var string
     */
    public $intelligentIntent;

    /**
     * @var int
     */
    public $notifyLevel;

    /**
     * @var string
     */
    public $privateContentParameters;

    /**
     * @var string
     */
    public $privateMsgTemplateId;

    /**
     * @var string
     */
    public $privateTitleParameters;
    protected $_name = [
        'category' => 'Category',
        'deleteIntentData' => 'DeleteIntentData',
        'intelligentIntent' => 'IntelligentIntent',
        'notifyLevel' => 'NotifyLevel',
        'privateContentParameters' => 'PrivateContentParameters',
        'privateMsgTemplateId' => 'PrivateMsgTemplateId',
        'privateTitleParameters' => 'PrivateTitleParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->deleteIntentData) {
            $res['DeleteIntentData'] = $this->deleteIntentData;
        }

        if (null !== $this->intelligentIntent) {
            $res['IntelligentIntent'] = $this->intelligentIntent;
        }

        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
        }

        if (null !== $this->privateContentParameters) {
            $res['PrivateContentParameters'] = $this->privateContentParameters;
        }

        if (null !== $this->privateMsgTemplateId) {
            $res['PrivateMsgTemplateId'] = $this->privateMsgTemplateId;
        }

        if (null !== $this->privateTitleParameters) {
            $res['PrivateTitleParameters'] = $this->privateTitleParameters;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DeleteIntentData'])) {
            $model->deleteIntentData = $map['DeleteIntentData'];
        }

        if (isset($map['IntelligentIntent'])) {
            $model->intelligentIntent = $map['IntelligentIntent'];
        }

        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }

        if (isset($map['PrivateContentParameters'])) {
            $model->privateContentParameters = $map['PrivateContentParameters'];
        }

        if (isset($map['PrivateMsgTemplateId'])) {
            $model->privateMsgTemplateId = $map['PrivateMsgTemplateId'];
        }

        if (isset($map['PrivateTitleParameters'])) {
            $model->privateTitleParameters = $map['PrivateTitleParameters'];
        }

        return $model;
    }
}
