<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class noncurrentVersionExpiration extends Model
{
    /**
     * @description 天数
     *
     * @var int
     */
    public $noncurrentDays;
    protected $_name = [
        'noncurrentDays' => 'NoncurrentDays',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noncurrentVersionExpiration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoncurrentDays'])) {
            $model->noncurrentDays = $map['NoncurrentDays'];
        }

        return $model;
    }
}
