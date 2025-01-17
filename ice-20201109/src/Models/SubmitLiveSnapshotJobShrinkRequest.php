<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitLiveSnapshotJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var string
     */
    public $snapshotOutputShrink;
    /**
     * @var string
     */
    public $streamInputShrink;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'callbackUrl'          => 'CallbackUrl',
        'jobName'              => 'JobName',
        'snapshotOutputShrink' => 'SnapshotOutput',
        'streamInputShrink'    => 'StreamInput',
        'templateId'           => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->snapshotOutputShrink) {
            $res['SnapshotOutput'] = $this->snapshotOutputShrink;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['SnapshotOutput'])) {
            $model->snapshotOutputShrink = $map['SnapshotOutput'];
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
