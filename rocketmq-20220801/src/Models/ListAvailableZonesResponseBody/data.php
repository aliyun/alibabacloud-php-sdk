<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $zoneId;
    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'createTime' => 'createTime',
        'updateTime' => 'updateTime',
        'zoneId'     => 'zoneId',
        'zoneName'   => 'zoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['zoneName'] = $this->zoneName;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        if (isset($map['zoneName'])) {
            $model->zoneName = $map['zoneName'];
        }

        return $model;
    }
}
