<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeTranscodeJobRequest extends Model
{
    /**
     * @description The ID of the data center.
     *
     * This parameter is required.
     *
     * @example ******3b-4d18-395c-8106-ff21a6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The task name. The name can contain letters, digits, hyphens (-), and underscores (_). The name must be 255 characters in length.
     *
     * This parameter is required.
     *
     * @example task1
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The URL of the input stream.
     *
     * This parameter is required.
     *
     * @example rtmp://mydomain/app/stream1
     *
     * @var string
     */
    public $streamInput;

    /**
     * @description The URL of the output stream.
     *
     * This parameter is required.
     *
     * @example rtmp://testdomain/app/stream2
     *
     * @var string
     */
    public $streamOutput;

    /**
     * @description The template ID.
     *
     * This parameter is required.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'streamInput' => 'StreamInput',
        'streamOutput' => 'StreamOutput',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = $this->streamInput;
        }
        if (null !== $this->streamOutput) {
            $res['StreamOutput'] = $this->streamOutput;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeTranscodeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamInput'])) {
            $model->streamInput = $map['StreamInput'];
        }
        if (isset($map['StreamOutput'])) {
            $model->streamOutput = $map['StreamOutput'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
