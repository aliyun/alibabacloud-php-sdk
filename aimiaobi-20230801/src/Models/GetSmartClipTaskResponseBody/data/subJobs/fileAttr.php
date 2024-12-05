<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data\subJobs;

use AlibabaCloud\Tea\Model;

class fileAttr extends Model
{
    /**
     * @example 120
     *
     * @var float
     */
    public $duration;

    /**
     * @example 290804
     *
     * @var string
     */
    public $fileLength;

    /**
     * @example 2024-12-12.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @example http://www.example.com/tmp.mp4
     *
     * @var string
     */
    public $tmpUrl;

    /**
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'duration'   => 'Duration',
        'fileLength' => 'FileLength',
        'fileName'   => 'FileName',
        'height'     => 'Height',
        'tmpUrl'     => 'TmpUrl',
        'width'      => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileLength) {
            $res['FileLength'] = $this->fileLength;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->tmpUrl) {
            $res['TmpUrl'] = $this->tmpUrl;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileAttr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileLength'])) {
            $model->fileLength = $map['FileLength'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['TmpUrl'])) {
            $model->tmpUrl = $map['TmpUrl'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
