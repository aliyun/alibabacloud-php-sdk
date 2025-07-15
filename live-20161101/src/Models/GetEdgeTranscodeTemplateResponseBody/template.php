<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetEdgeTranscodeTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The bitrate. If a numeric value is returned, a fixed bitrate is configured for the output stream. If ws is returned, the output stream maintains the same bitrate as the input stream.
     *
     * @example 3000
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The video encoding format. Valid values:
     *
     *   H.264
     *   H.265
     *
     * @example H.264
     *
     * @var string
     */
    public $codec;

    /**
     * @description The time when the template was created.
     *
     * @example 2023-07-25T02:48:58Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The frame rate. If a numeric value is returned, a fixed frame rate is configured for the output stream. If ws is returned, the output stream maintains the same frame rate as the input stream.
     *
     * @example 30
     *
     * @var string
     */
    public $fps;

    /**
     * @description The group of pictures (GOP) size. The GOP size can be defined by the number of frames or the time interval between I-frames. If ws is returned, the output stream maintains the same GOP size as the input stream.
     *
     * @example 2s
     *
     * @var string
     */
    public $gop;

    /**
     * @description The template name.
     *
     * @example my_template
     *
     * @var string
     */
    public $name;

    /**
     * @description The resolution. If width and height values are returned, a fixed resolution is configured for the output stream. If ws is returned, the output stream maintains the same resolution as the input stream.
     *
     * >  If the width value is -1, the width of the output stream is adapted to the height. If the height value is -2, the height of the output stream is adapted to the width.
     *
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The template ID.
     *
     * @example 9b1571b513cb44f7a1ba6ae561ff****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The type of edge transcoding.
     *
     * @example common
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'codec' => 'Codec',
        'createTime' => 'CreateTime',
        'fps' => 'Fps',
        'gop' => 'Gop',
        'name' => 'Name',
        'resolution' => 'Resolution',
        'templateId' => 'TemplateId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
