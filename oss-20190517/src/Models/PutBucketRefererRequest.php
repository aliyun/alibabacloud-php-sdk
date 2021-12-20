<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRefererRequest extends Model
{
    /**
     * @var RefererConfiguration
     */
    public $refererConfiguration;
    protected $_name = [
        'refererConfiguration' => 'RefererConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refererConfiguration) {
            $res['RefererConfiguration'] = null !== $this->refererConfiguration ? $this->refererConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketRefererRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefererConfiguration'])) {
            $model->refererConfiguration = RefererConfiguration::fromMap($map['RefererConfiguration']);
        }

        return $model;
    }
}
