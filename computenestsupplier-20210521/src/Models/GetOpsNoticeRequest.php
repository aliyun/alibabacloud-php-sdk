<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GetOpsNoticeRequest extends Model
{
    /**
     * @var string
     */
    public $noticeId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'noticeId' => 'NoticeId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noticeId) {
            $res['NoticeId'] = $this->noticeId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['NoticeId'])) {
            $model->noticeId = $map['NoticeId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
