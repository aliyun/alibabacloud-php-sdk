<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageSplicingTaskShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $align;

    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $imageFormat;

    /**
     * @var int
     */
    public $margin;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var int
     */
    public $padding;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'align'                  => 'Align',
        'backgroundColor'        => 'BackgroundColor',
        'credentialConfigShrink' => 'CredentialConfig',
        'direction'              => 'Direction',
        'imageFormat'            => 'ImageFormat',
        'margin'                 => 'Margin',
        'notifyTopicName'        => 'NotifyTopicName',
        'padding'                => 'Padding',
        'projectName'            => 'ProjectName',
        'quality'                => 'Quality',
        'scaleType'              => 'ScaleType',
        'sourcesShrink'          => 'Sources',
        'tagsShrink'             => 'Tags',
        'targetURI'              => 'TargetURI',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->align) {
            $res['Align'] = $this->align;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->imageFormat) {
            $res['ImageFormat'] = $this->imageFormat;
        }
        if (null !== $this->margin) {
            $res['Margin'] = $this->margin;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->padding) {
            $res['Padding'] = $this->padding;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageSplicingTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Align'])) {
            $model->align = $map['Align'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['ImageFormat'])) {
            $model->imageFormat = $map['ImageFormat'];
        }
        if (isset($map['Margin'])) {
            $model->margin = $map['Margin'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Padding'])) {
            $model->padding = $map['Padding'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
