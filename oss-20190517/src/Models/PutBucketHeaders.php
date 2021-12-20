<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $acl;
    protected $_name = [
        'acl' => 'x-oss-acl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->acl) {
            $res['x-oss-acl'] = $this->acl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-acl'])) {
            $model->acl = $map['x-oss-acl'];
        }

        return $model;
    }
}
