<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveSnapshotJobShrinkRequest extends Model
{
    /**
     * @example http://www.aliyun.com/snapshot/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $jobName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $snapshotOutputShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamInputShrink;

    /**
     * @description This parameter is required.
     *
     * @example ****a046-263c-3560-978a-fb287782****
     *
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

    /**
     * @param array $map
     *
     * @return SubmitLiveSnapshotJobShrinkRequest
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
