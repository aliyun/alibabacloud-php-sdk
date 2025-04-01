<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions\region\recommendZones;

class region extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var recommendZones
     */
    public $recommendZones;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName' => 'LocalName',
        'recommendZones' => 'RecommendZones',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->recommendZones) {
            $this->recommendZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->recommendZones) {
            $res['RecommendZones'] = null !== $this->recommendZones ? $this->recommendZones->toArray($noStream) : $this->recommendZones;
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
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

        if (isset($map['RecommendZones'])) {
            $model->recommendZones = recommendZones::fromMap($map['RecommendZones']);
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
