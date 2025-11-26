<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule;

use AlibabaCloud\Dara\Model;

class expiration extends Model
{
    /**
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @var string
     */
    public $days;
    protected $_name = [
        'createdBeforeDate' => 'CreatedBeforeDate',
        'days' => 'Days',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
