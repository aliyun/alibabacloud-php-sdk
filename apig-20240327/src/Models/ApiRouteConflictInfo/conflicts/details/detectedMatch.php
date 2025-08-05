<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\detectedMatch\operationInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch;

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
        'match' => 'match',
        'operationInfo' => 'operationInfo',
    ];

    public function validate()
    {
        if (null !== $this->match) {
            $this->match->validate();
        }
        if (null !== $this->operationInfo) {
            $this->operationInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->operationInfo) {
            $res['operationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toArray($noStream) : $this->operationInfo;
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
        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }

        if (isset($map['operationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['operationInfo']);
        }

        return $model;
    }
}
