<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\BucketCnameConfiguration\cname;
use AlibabaCloud\Tea\Model;

class BucketCnameConfiguration extends Model
{
    /**
     * @var cname
     */
    public $cname;
    protected $_name = [
        'cname' => 'Cname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = null !== $this->cname ? $this->cname->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketCnameConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = cname::fromMap($map['Cname']);
        }

        return $model;
    }
}
