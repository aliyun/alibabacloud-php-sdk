<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $imageStorage;
    protected $_name = [
        'imageStorage' => 'image_storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageStorage) {
            $res['image_storage'] = $this->imageStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_storage'])) {
            $model->imageStorage = $map['image_storage'];
        }

        return $model;
    }
}
