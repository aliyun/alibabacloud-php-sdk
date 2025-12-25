<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class highAvailability extends Model
{
    /**
     * @var string
     */
    public $currentActiveAZ;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $primaryZoneId;

    /**
     * @var string
     */
    public $secondaryZoneId;
    protected $_name = [
        'currentActiveAZ' => 'CurrentActiveAZ',
        'mode' => 'Mode',
        'primaryZoneId' => 'PrimaryZoneId',
        'secondaryZoneId' => 'SecondaryZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentActiveAZ) {
            $res['CurrentActiveAZ'] = $this->currentActiveAZ;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
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
        if (isset($map['CurrentActiveAZ'])) {
            $model->currentActiveAZ = $map['CurrentActiveAZ'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        return $model;
    }
}
