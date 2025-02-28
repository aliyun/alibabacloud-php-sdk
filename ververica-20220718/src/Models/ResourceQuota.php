<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->limit) {
            $this->limit->validate();
        }
        if (null !== $this->used) {
            $this->used->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = null !== $this->limit ? $this->limit->toArray($noStream) : $this->limit;
        }

        if (null !== $this->used) {
            $res['used'] = null !== $this->used ? $this->used->toArray($noStream) : $this->used;
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
        if (isset($map['limit'])) {
            $model->limit = ResourceSpec::fromMap($map['limit']);
        }

        if (isset($map['used'])) {
            $model->used = ResourceSpec::fromMap($map['used']);
        }

        return $model;
    }
}
