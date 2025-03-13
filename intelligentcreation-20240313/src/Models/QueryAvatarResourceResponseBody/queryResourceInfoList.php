<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponseBody;

use AlibabaCloud\Tea\Model;

class queryResourceInfoList extends Model
{
    /**
     * @example 21275
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example STANDARD
     *
     * @var string
     */
    public $type;

    /**
     * @example 1719904342237
     *
     * @var string
     */
    public $validPeriodTime;
    protected $_name = [
        'resourceId'      => 'resourceId',
        'type'            => 'type',
        'validPeriodTime' => 'validPeriodTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->validPeriodTime) {
            $res['validPeriodTime'] = $this->validPeriodTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryResourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['validPeriodTime'])) {
            $model->validPeriodTime = $map['validPeriodTime'];
        }

        return $model;
    }
}
