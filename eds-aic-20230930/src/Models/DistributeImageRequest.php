<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DistributeImageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $distributeRegionList;

    /**
     * @description This parameter is required.
     *
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;
    protected $_name = [
        'distributeRegionList' => 'DistributeRegionList',
        'imageId'              => 'ImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributeRegionList) {
            $res['DistributeRegionList'] = $this->distributeRegionList;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistributeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributeRegionList'])) {
            if (!empty($map['DistributeRegionList'])) {
                $model->distributeRegionList = $map['DistributeRegionList'];
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
