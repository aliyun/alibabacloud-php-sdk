<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveRequest extends Model
{
    /**
     * @description 直播简介，支持中英文，最大长度2048位
     *
     * @var string
     */
    public $introduction;

    /**
     * @description 直播资源的唯一标识ID
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 直播标题，支持中英文，最大长度256位
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'introduction' => 'Introduction',
        'liveId'       => 'LiveId',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
