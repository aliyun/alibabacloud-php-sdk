<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest\sources;

class CreateImageSplicingTaskRequest extends Model
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
     * @var CredentialConfig
     */
    public $credentialConfig;

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
     * @var Notification
     */
    public $notification;

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
     * @var sources[]
     */
    public $sources;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'align' => 'Align',
        'backgroundColor' => 'BackgroundColor',
        'credentialConfig' => 'CredentialConfig',
        'direction' => 'Direction',
        'imageFormat' => 'ImageFormat',
        'margin' => 'Margin',
        'notification' => 'Notification',
        'padding' => 'Padding',
        'projectName' => 'ProjectName',
        'quality' => 'Quality',
        'scaleType' => 'ScaleType',
        'sources' => 'Sources',
        'tags' => 'Tags',
        'targetURI' => 'TargetURI',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->align) {
            $res['Align'] = $this->align;
        }

        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
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
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
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
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1++] = sources::fromMap($item1);
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
