<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ImportImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageDescription;

    /**
     * @var string
     */
    public $imageFileURL;

    /**
     * @var string
     */
    public $imageName;
    protected $_name = [
        'imageDescription' => 'ImageDescription',
        'imageFileURL' => 'ImageFileURL',
        'imageName' => 'ImageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageDescription) {
            $res['ImageDescription'] = $this->imageDescription;
        }

        if (null !== $this->imageFileURL) {
            $res['ImageFileURL'] = $this->imageFileURL;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
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
        if (isset($map['ImageDescription'])) {
            $model->imageDescription = $map['ImageDescription'];
        }

        if (isset($map['ImageFileURL'])) {
            $model->imageFileURL = $map['ImageFileURL'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        return $model;
    }
}
