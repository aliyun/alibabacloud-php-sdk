<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList;

use AlibabaCloud\Dara\Model;

class imageInfoList extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $imageFilePath;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'fileName' => 'FileName',
        'imageFilePath' => 'ImageFilePath',
        'imageType' => 'ImageType',
        'imageUrl' => 'ImageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->imageFilePath) {
            $res['ImageFilePath'] = $this->imageFilePath;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['ImageFilePath'])) {
            $model->imageFilePath = $map['ImageFilePath'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
