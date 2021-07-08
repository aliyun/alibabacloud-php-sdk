<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播的唯一标识ID。
     *
     * @var string
     */
    public $liveId;
    protected $_name = [
        'liveId' => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}
