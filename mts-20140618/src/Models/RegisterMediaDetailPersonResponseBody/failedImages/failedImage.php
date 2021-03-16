<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\failedImages;

use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\failedImages\failedImage\imageFile;
use AlibabaCloud\Tea\Model;

class failedImage extends Model
{
    /**
     * @var imageFile
     */
    public $imageFile;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'imageFile' => 'ImageFile',
        'success'   => 'Success',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFile) {
            $res['ImageFile'] = null !== $this->imageFile ? $this->imageFile->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageFile'])) {
            $model->imageFile = imageFile::fromMap($map['ImageFile']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
