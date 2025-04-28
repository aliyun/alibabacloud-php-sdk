<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsMixedResponseBody\regions;

use AlibabaCloud\Dara\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'regionId' => 'RegionId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
