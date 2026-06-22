<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class KopilotQueryStatusRequest extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'owner' => 'Owner',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
