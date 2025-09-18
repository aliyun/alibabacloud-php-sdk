<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryRequest\componentInfo;

class GetDoctorComputeSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var componentInfo
     */
    public $componentInfo;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'componentInfo' => 'ComponentInfo',
        'dateTime' => 'DateTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->componentInfo) {
            $this->componentInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->componentInfo) {
            $res['ComponentInfo'] = null !== $this->componentInfo ? $this->componentInfo->toArray($noStream) : $this->componentInfo;
        }

        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComponentInfo'])) {
            $model->componentInfo = componentInfo::fromMap($map['ComponentInfo']);
        }

        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
