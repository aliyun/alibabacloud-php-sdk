<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class lifecycleExpiration extends Model
{
    /**
     * @description 日期
     *
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @description 天数
     *
     * @var int
     */
    public $days;

    /**
     * @description 自动移除过期删除标记
     *
     * @var bool
     */
    public $expiredObjectDeleteMarker;
    protected $_name = [
        'createdBeforeDate'         => 'CreatedBeforeDate',
        'days'                      => 'Days',
        'expiredObjectDeleteMarker' => 'ExpiredObjectDeleteMarker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBeforeDate) {
            $res['CreatedBeforeDate'] = $this->createdBeforeDate;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->expiredObjectDeleteMarker) {
            $res['ExpiredObjectDeleteMarker'] = $this->expiredObjectDeleteMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleExpiration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBeforeDate'])) {
            $model->createdBeforeDate = $map['CreatedBeforeDate'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['ExpiredObjectDeleteMarker'])) {
            $model->expiredObjectDeleteMarker = $map['ExpiredObjectDeleteMarker'];
        }

        return $model;
    }
}
