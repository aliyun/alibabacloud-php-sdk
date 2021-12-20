<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class lifecycleAbortMultipartUpload extends Model
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
    protected $_name = [
        'createdBeforeDate' => 'CreatedBeforeDate',
        'days'              => 'Days',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleAbortMultipartUpload
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

        return $model;
    }
}
