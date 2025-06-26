<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $imageCount;
    protected $_name = [
        'imageCount' => 'image_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['image_count'] = $this->imageCount;
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
        if (isset($map['image_count'])) {
            $model->imageCount = $map['image_count'];
        }

        return $model;
    }
}
