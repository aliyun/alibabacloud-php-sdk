<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteDynamicImageRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicImageIds;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'dynamicImageIds' => 'DynamicImageIds',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicImageIds) {
            $res['DynamicImageIds'] = $this->dynamicImageIds;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['DynamicImageIds'])) {
            $model->dynamicImageIds = $map['DynamicImageIds'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
