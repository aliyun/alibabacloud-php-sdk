<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketTagsRequest extends Model
{
    /**
     * @var Tagging
     */
    public $tagging;
    protected $_name = [
        'tagging' => 'Tagging',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagging) {
            $res['Tagging'] = null !== $this->tagging ? $this->tagging->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tagging'])) {
            $model->tagging = Tagging::fromMap($map['Tagging']);
        }

        return $model;
    }
}
