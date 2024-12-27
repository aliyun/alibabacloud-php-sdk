<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateImageSplicingTaskRequest extends Model
{
    /**
     * @description The width or height with which the input images must align. Valid values: 1 to 4096. Unit: px.
     *
     *   If you set **Direction** to `vertical`, this parameter specifies the width with which the input images must align.
     *   If you set **Direction** to `horizontal`, this parameter specifies the height with which the input images must align.
     *
     * >  If you do not specify this parameter, the width or height of the first input image is used.
     * @example 192
     *
     * @var int
     */
    public $align;

    /**
     * @description The padding color of the spaces specified by `Padding` and `Margin`. Colors encoded in the `#FFFFFF` format and colors that are related to preset keywords such as `red` and `alpha` are supported.
     *
     * @example red
     *
     * @var string
     */
    public $backgroundColor;

    /**
     * @description The authorization chain. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     *
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The splicing method. Valid values:
     *
     *   vertical (default): All input images are vertically aligned and have the same width.
     *   horizontal: All input images are horizontally aligned and have the same height.
     *
     * @example vertical
     *
     * @var string
     */
    public $direction;

    /**
     * @description The compression format of the output image. Valid values:
     *
     *   jpg (default)
     *   png
     *   webp
     *
     * @example jpg
     *
     * @var string
     */
    public $imageFormat;

    /**
     * @description The empty space or border around the edges of the output image. Default value: 0. Unit: px.
     *
     * @example 2
     *
     * @var int
     */
    public $margin;

    /**
     * @description The notification settings. For more information, click Notification. For information about the asynchronous notification format, see [Asynchronous notification format](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The space between component images in the output image. Default value: 0. Unit: px.
     *
     * @example 2
     *
     * @var int
     */
    public $padding;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The compression quality of the output image. This parameter takes effect only for JPG and WebP images. Valid values: 0 to 100. Default value: 80.
     *
     * @example 80
     *
     * @var int
     */
    public $quality;

    /**
     * @description The scaling mode of the input images that are vertically or horizontally aligned. Valid values:
     *
     *   fit (default): Input images are scaled proportionally, and black edges are not retained.
     *   stretch: Input images are stretched to fill the space.
     *   horizon: Input images are horizontally stretched.
     *   vertical: Input images are vertically stretched.
     *
     * @example stretch
     *
     * @var string
     */
    public $scaleType;

    /**
     * @description The input images. The images are sliced in the order of the input image URIs.
     *
     * This parameter is required.
     * @var sources[]
     */
    public $sources;

    /**
     * @description The custom tags. You can search for or filter asynchronous tasks by custom tag.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The OSS bucket in which you want to store the output image.
     *
     * This parameter is required.
     * @example oss://examplebucket/outputImage.jpg
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The user data, which is returned as asynchronous notifications to help manage notifications within your system. The maximum length of the user data is 2,048 bytes.
     *
     * @example test-data
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
