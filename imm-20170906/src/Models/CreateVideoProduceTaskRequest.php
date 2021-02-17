<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoProduceTaskRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @var string
     */
    public $customMessage;

    /**
     * @var string
     */
    public $music;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'project'         => 'Project',
        'images'          => 'Images',
        'notifyTopicName' => 'NotifyTopicName',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'targetUri'       => 'TargetUri',
        'customMessage'   => 'CustomMessage',
        'music'           => 'Music',
        'width'           => 'Width',
        'height'          => 'Height',
        'templateName'    => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }
        if (null !== $this->customMessage) {
            $res['CustomMessage'] = $this->customMessage;
        }
        if (null !== $this->music) {
            $res['Music'] = $this->music;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoProduceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }
        if (isset($map['Music'])) {
            $model->music = $map['Music'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
