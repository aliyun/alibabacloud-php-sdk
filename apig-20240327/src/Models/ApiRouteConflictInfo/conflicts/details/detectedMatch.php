<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details;

use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\detectedMatch\operationInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch;
use AlibabaCloud\Tea\Model;

class detectedMatch extends Model
{
    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var operationInfo
     */
    public $operationInfo;
    protected $_name = [
        'match'         => 'match',
        'operationInfo' => 'operationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->operationInfo) {
            $res['operationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectedMatch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }
        if (isset($map['operationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['operationInfo']);
        }

        return $model;
    }
}
