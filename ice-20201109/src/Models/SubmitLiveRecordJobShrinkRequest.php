<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitLiveRecordJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notifyUrl;
    /**
     * @var string
     */
    public $recordOutputShrink;
    /**
     * @var string
     */
    public $streamInputShrink;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'               => 'Name',
        'notifyUrl'          => 'NotifyUrl',
        'recordOutputShrink' => 'RecordOutput',
        'streamInputShrink'  => 'StreamInput',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->recordOutputShrink) {
            $res['RecordOutput'] = $this->recordOutputShrink;
        }

        if (null !== $this->streamInputShrink) {
            $res['StreamInput'] = $this->streamInputShrink;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        if (isset($map['RecordOutput'])) {
            $model->recordOutputShrink = $map['RecordOutput'];
        }

        if (isset($map['StreamInput'])) {
            $model->streamInputShrink = $map['StreamInput'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
