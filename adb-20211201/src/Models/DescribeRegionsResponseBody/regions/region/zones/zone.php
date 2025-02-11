<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsResponseBody\regions\region\zones;

use AlibabaCloud\Dara\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $localName;
    /**
     * @var bool
     */
    public $vpcEnabled;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'localName'  => 'LocalName',
        'vpcEnabled' => 'VpcEnabled',
        'zoneId'     => 'ZoneId',
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

        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
