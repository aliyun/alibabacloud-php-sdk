<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileAttr extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $tmpUrl;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'fileName' => 'FileName',
        'height' => 'Height',
        'tmpUrl' => 'TmpUrl',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
