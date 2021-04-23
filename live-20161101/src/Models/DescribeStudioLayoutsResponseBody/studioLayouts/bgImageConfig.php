<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class bgImageConfig extends Model
{
    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'materialId' => 'MaterialId',
        'imageUrl'   => 'ImageUrl',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgImageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
