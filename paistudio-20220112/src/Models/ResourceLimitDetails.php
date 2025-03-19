<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceLimitDetails extends Model
{
    /**
     * @var string
     */
    public $GCLevel;

    /**
     * @var mixed[]
     */
    public $resourceLimit;

    /**
     * @var bool
     */
    public $shouldIgnoreResourceCheck;
    protected $_name = [
        'GCLevel' => 'GCLevel',
        'resourceLimit' => 'ResourceLimit',
        'shouldIgnoreResourceCheck' => 'ShouldIgnoreResourceCheck',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->GCLevel) {
            $res['GCLevel'] = $this->GCLevel;
        }
        if (null !== $this->resourceLimit) {
            $res['ResourceLimit'] = $this->resourceLimit;
        }
        if (null !== $this->shouldIgnoreResourceCheck) {
            $res['ShouldIgnoreResourceCheck'] = $this->shouldIgnoreResourceCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceLimitDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GCLevel'])) {
            $model->GCLevel = $map['GCLevel'];
        }
        if (isset($map['ResourceLimit'])) {
            $model->resourceLimit = $map['ResourceLimit'];
        }
        if (isset($map['ShouldIgnoreResourceCheck'])) {
            $model->shouldIgnoreResourceCheck = $map['ShouldIgnoreResourceCheck'];
        }

        return $model;
    }
}
