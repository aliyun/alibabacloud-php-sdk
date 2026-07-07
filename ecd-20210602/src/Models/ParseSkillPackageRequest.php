<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;

class ParseSkillPackageRequest extends Model
{
    /**
     * @var string
     */
    public $ossObjectETag;

    /**
     * @var string
     */
    public $ossObjectKey;
    protected $_name = [
        'ossObjectETag' => 'OssObjectETag',
        'ossObjectKey' => 'OssObjectKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossObjectETag) {
            $res['OssObjectETag'] = $this->ossObjectETag;
        }

        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
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
        if (isset($map['OssObjectETag'])) {
            $model->ossObjectETag = $map['OssObjectETag'];
        }

        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        return $model;
    }
}
