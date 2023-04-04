<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateImageSplicingTaskRequest extends Model
{
    /**
     * @example 192
     *
     * @var int
     */
    public $align;

    /**
     * @example red
     *
     * @var string
     */
    public $backgroundColor;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example vertical
     *
     * @var string
     */
    public $direction;

    /**
     * @example jpg
     *
     * @var string
     */
    public $imageFormat;

    /**
     * @example 2
     *
     * @var int
     */
    public $margin;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @example 2
     *
     * @var int
     */
    public $padding;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 80
     *
     * @var int
     */
    public $quality;

    /**
     * @example stretch
     *
     * @var string
     */
    public $scaleType;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @example {"key":"val"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @example oss://test-bucket/test-target-object.jpg
     *
     * @var string
     */
    public $targetURI;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'align'            => 'Align',
        'backgroundColor'  => 'BackgroundColor',
        'credentialConfig' => 'CredentialConfig',
        'direction'        => 'Direction',
        'imageFormat'      => 'ImageFormat',
        'margin'           => 'Margin',
        'notification'     => 'Notification',
        'padding'          => 'Padding',
        'projectName'      => 'ProjectName',
        'quality'          => 'Quality',
        'scaleType'        => 'ScaleType',
        'sources'          => 'Sources',
        'tags'             => 'Tags',
        'targetURI'        => 'TargetURI',
        'userData'         => 'UserData',
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
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
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
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
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
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return CreateImageSplicingTaskRequest
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
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
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
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
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
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
