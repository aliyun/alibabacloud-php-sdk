<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo;

use AlibabaCloud\Dara\Model;

class mezzanine extends Model
{
    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $originalFileName;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'fileSize' => 'FileSize',
        'fileURL' => 'FileURL',
        'height' => 'Height',
        'originalFileName' => 'OriginalFileName',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->originalFileName) {
            $res['OriginalFileName'] = $this->originalFileName;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['OriginalFileName'])) {
            $model->originalFileName = $map['OriginalFileName'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
