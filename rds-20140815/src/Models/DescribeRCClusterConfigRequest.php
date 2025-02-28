<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCClusterConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $temporaryDurationMinutes;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'regionId'                 => 'RegionId',
        'temporaryDurationMinutes' => 'TemporaryDurationMinutes',
        'vpcId'                    => 'VpcId',
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

        if (null !== $this->temporaryDurationMinutes) {
            $res['TemporaryDurationMinutes'] = $this->temporaryDurationMinutes;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['TemporaryDurationMinutes'])) {
            $model->temporaryDurationMinutes = $map['TemporaryDurationMinutes'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
