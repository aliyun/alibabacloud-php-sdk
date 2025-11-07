<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class ModifyBlackListStrategyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $blackListStrategyShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'blackListStrategyShrink' => 'BlackListStrategy',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackListStrategyShrink) {
            $res['BlackListStrategy'] = $this->blackListStrategyShrink;
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
        if (isset($map['BlackListStrategy'])) {
            $model->blackListStrategyShrink = $map['BlackListStrategy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
