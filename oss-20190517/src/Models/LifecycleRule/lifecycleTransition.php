<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class lifecycleTransition extends Model
{
    /**
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @var int
     */
    public $days;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'createdBeforeDate' => 'CreatedBeforeDate',
        'days'              => 'Days',
        'storageClass'      => 'StorageClass',
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
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleTransition
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
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
