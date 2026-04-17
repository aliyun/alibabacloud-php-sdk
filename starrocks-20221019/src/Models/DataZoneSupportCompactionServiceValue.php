<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class DataZoneSupportCompactionServiceValue extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $resourceLevel;

    /**
     * @var bool
     */
    public $recommended;
    protected $_name = [
        'zoneId' => 'zoneId',
        'resourceLevel' => 'resourceLevel',
        'recommended' => 'recommended',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        if (null !== $this->resourceLevel) {
            $res['resourceLevel'] = $this->resourceLevel;
        }

        if (null !== $this->recommended) {
            $res['recommended'] = $this->recommended;
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
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        if (isset($map['resourceLevel'])) {
            $model->resourceLevel = $map['resourceLevel'];
        }

        if (isset($map['recommended'])) {
            $model->recommended = $map['recommended'];
        }

        return $model;
    }
}
