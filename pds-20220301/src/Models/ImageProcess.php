<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImageProcess extends Model
{
    /**
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @var string
     */
    public $officeThumbnailProcess;

    /**
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'imageThumbnailProcess'  => 'image_thumbnail_process',
        'officeThumbnailProcess' => 'office_thumbnail_process',
        'videoThumbnailProcess'  => 'video_thumbnail_process',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageThumbnailProcess) {
            $res['image_thumbnail_process'] = $this->imageThumbnailProcess;
        }
        if (null !== $this->officeThumbnailProcess) {
            $res['office_thumbnail_process'] = $this->officeThumbnailProcess;
        }
        if (null !== $this->videoThumbnailProcess) {
            $res['video_thumbnail_process'] = $this->videoThumbnailProcess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageProcess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_thumbnail_process'])) {
            $model->imageThumbnailProcess = $map['image_thumbnail_process'];
        }
        if (isset($map['office_thumbnail_process'])) {
            $model->officeThumbnailProcess = $map['office_thumbnail_process'];
        }
        if (isset($map['video_thumbnail_process'])) {
            $model->videoThumbnailProcess = $map['video_thumbnail_process'];
        }

        return $model;
    }
}
