<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\playList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\playList\play\file;
use AlibabaCloud\Tea\Model;

class play extends Model
{
    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var file
     */
    public $file;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $mediaWorkflowName;
    protected $_name = [
        'encryption'        => 'Encryption',
        'height'            => 'Height',
        'bitrate'           => 'Bitrate',
        'file'              => 'File',
        'mediaWorkflowId'   => 'MediaWorkflowId',
        'width'             => 'Width',
        'size'              => 'Size',
        'fps'               => 'Fps',
        'duration'          => 'Duration',
        'activityName'      => 'ActivityName',
        'format'            => 'Format',
        'mediaWorkflowName' => 'MediaWorkflowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->mediaWorkflowName) {
            $res['MediaWorkflowName'] = $this->mediaWorkflowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return play
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['MediaWorkflowName'])) {
            $model->mediaWorkflowName = $map['MediaWorkflowName'];
        }

        return $model;
    }
}
