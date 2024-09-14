<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ResourceQuota extends Model
{
    /**
     * @var ResourceSpec
     */
    public $limit;

    /**
     * @var ResourceSpec
     */
    public $used;
    protected $_name = [
        'limit' => 'limit',
        'used'  => 'used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = null !== $this->limit ? $this->limit->toMap() : null;
        }
        if (null !== $this->used) {
            $res['used'] = null !== $this->used ? $this->used->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = ResourceSpec::fromMap($map['limit']);
        }
        if (isset($map['used'])) {
            $model->used = ResourceSpec::fromMap($map['used']);
        }

        return $model;
    }
}
