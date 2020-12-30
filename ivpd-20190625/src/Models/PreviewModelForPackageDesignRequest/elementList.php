<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\PreviewModelForPackageDesignRequest;

use AlibabaCloud\Tea\Model;

class elementList extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $sideName;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'sideName' => 'SideName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->sideName) {
            $res['SideName'] = $this->sideName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elementList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['SideName'])) {
            $model->sideName = $map['SideName'];
        }

        return $model;
    }
}
