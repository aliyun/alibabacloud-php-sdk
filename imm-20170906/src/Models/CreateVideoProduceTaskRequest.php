<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoProduceTaskRequest extends Model
{
    /**
     * @var string
     */
    public $customMessage;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $music;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $targetUri;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'customMessage'   => 'CustomMessage',
        'height'          => 'Height',
        'images'          => 'Images',
        'music'           => 'Music',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'project'         => 'Project',
        'targetUri'       => 'TargetUri',
        'templateName'    => 'TemplateName',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customMessage) {
            $res['CustomMessage'] = $this->customMessage;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->music) {
            $res['Music'] = $this->music;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }
        if (isset($map['Music'])) {
            $model->music = $map['Music'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
