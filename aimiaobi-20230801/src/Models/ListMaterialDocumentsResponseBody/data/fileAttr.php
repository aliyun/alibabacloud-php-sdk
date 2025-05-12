<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsResponseBody\data;

use AlibabaCloud\Dara\Model;

class fileAttr extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var int
     */
    public $fileLength;

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
    public $mimeType;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'fileLength' => 'FileLength',
        'fileName' => 'FileName',
        'height' => 'Height',
        'mimeType' => 'MimeType',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
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

        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
