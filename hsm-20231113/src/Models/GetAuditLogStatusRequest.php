<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class GetAuditLogStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $getOssBucket;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'getOssBucket' => 'GetOssBucket',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->getOssBucket) {
            $res['GetOssBucket'] = $this->getOssBucket;
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
        if (isset($map['GetOssBucket'])) {
            $model->getOssBucket = $map['GetOssBucket'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
