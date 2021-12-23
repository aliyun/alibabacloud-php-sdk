<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaInfosRequest extends Model
{
    /**
     * @description 待注册的媒资在相应系统中的地址
     *
     * @var string
     */
    public $inputURLs;

    /**
     * @description ICE 媒资ID
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'inputURLs' => 'InputURLs',
        'mediaIds'  => 'MediaIds',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputURLs) {
            $res['InputURLs'] = $this->inputURLs;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMediaInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputURLs'])) {
            $model->inputURLs = $map['InputURLs'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
