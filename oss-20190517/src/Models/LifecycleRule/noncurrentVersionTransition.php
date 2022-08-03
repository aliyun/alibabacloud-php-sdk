<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class noncurrentVersionTransition extends Model
{
    /**
     * @var int
     */
    public $noncurrentDays;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'noncurrentDays' => 'NoncurrentDays',
        'storageClass'   => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noncurrentDays) {
            $res['NoncurrentDays'] = $this->noncurrentDays;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noncurrentVersionTransition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoncurrentDays'])) {
            $model->noncurrentDays = $map['NoncurrentDays'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
