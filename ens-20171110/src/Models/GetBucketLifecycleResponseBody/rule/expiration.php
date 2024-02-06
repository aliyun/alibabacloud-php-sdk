<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule;

use AlibabaCloud\Tea\Model;

class expiration extends Model
{
    /**
     * @description The expiration date.
     *
     * @example yyy-MM-DDThh:mm:ssZ
     *
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @description The validity period, in days.
     *
     * @example 5
     *
     * @var string
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
     * @return expiration
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
