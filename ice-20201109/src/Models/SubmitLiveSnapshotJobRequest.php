<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest\snapshotOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest\streamInput;
use AlibabaCloud\Tea\Model;

class SubmitLiveSnapshotJobRequest extends Model
{
    /**
     * @example http://www.aliyun.com/snapshot/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var snapshotOutput
     */
    public $snapshotOutput;

    /**
     * @var streamInput
     */
    public $streamInput;

    /**
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'callbackUrl'    => 'CallbackUrl',
        'jobName'        => 'JobName',
        'snapshotOutput' => 'SnapshotOutput',
        'streamInput'    => 'StreamInput',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->snapshotOutput) {
            $res['SnapshotOutput'] = null !== $this->snapshotOutput ? $this->snapshotOutput->toMap() : null;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveSnapshotJobRequest
     */
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
            $model->snapshotOutput = snapshotOutput::fromMap($map['SnapshotOutput']);
        }
        if (isset($map['StreamInput'])) {
            $model->streamInput = streamInput::fromMap($map['StreamInput']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
