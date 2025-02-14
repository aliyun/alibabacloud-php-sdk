<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ResourceStatistic extends Model
{
    /**
     * @var int
     */
    public $resourceCount;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceCount' => 'resourceCount',
        'resourceType'  => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
