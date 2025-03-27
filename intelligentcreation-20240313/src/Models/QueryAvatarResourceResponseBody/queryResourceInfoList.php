<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponseBody;

use AlibabaCloud\Dara\Model;

class queryResourceInfoList extends Model
{
    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $validPeriodTime;
    protected $_name = [
        'resourceId' => 'resourceId',
        'type' => 'type',
        'validPeriodTime' => 'validPeriodTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
