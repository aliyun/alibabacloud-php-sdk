<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName' => 'LocalName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
