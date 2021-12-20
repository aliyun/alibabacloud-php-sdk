<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketRefererResponseBody\refererList;
use AlibabaCloud\Tea\Model;

class GetBucketRefererResponseBody extends Model
{
    /**
     * @var bool
     */
    public $allowEmptyReferer;

    /**
     * @var refererList
     */
    public $refererList;
    protected $_name = [
        'allowEmptyReferer' => 'AllowEmptyReferer',
        'refererList'       => 'RefererList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowEmptyReferer) {
            $res['AllowEmptyReferer'] = $this->allowEmptyReferer;
        }
        if (null !== $this->refererList) {
            $res['RefererList'] = null !== $this->refererList ? $this->refererList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketRefererResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowEmptyReferer'])) {
            $model->allowEmptyReferer = $map['AllowEmptyReferer'];
        }
        if (isset($map['RefererList'])) {
            $model->refererList = refererList::fromMap($map['RefererList']);
        }

        return $model;
    }
}
