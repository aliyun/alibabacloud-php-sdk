<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetServiceResponseBody\buckets;
use AlibabaCloud\Tea\Model;

class GetServiceResponseBody extends Model
{
    /**
     * @var buckets
     */
    public $buckets;

    /**
     * @var Owner
     */
    public $owner;
    protected $_name = [
        'buckets' => 'Buckets',
        'owner'   => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = null !== $this->buckets ? $this->buckets->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buckets'])) {
            $model->buckets = buckets::fromMap($map['Buckets']);
        }
        if (isset($map['Owner'])) {
            $model->owner = Owner::fromMap($map['Owner']);
        }

        return $model;
    }
}
