<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketLocationResponseBody extends Model
{
    /**
     * @example oss-cn-hangzhou
     *
     * @var string
     */
    public $locationConstraint;
    protected $_name = [
        'locationConstraint' => 'LocationConstraint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationConstraint) {
            $res['LocationConstraint'] = $this->locationConstraint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketLocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationConstraint'])) {
            $model->locationConstraint = $map['LocationConstraint'];
        }

        return $model;
    }
}
