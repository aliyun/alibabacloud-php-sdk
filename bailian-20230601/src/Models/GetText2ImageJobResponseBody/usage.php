<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $imageCount;
    protected $_name = [
        'imageCount' => 'ImageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }

        return $model;
    }
}
