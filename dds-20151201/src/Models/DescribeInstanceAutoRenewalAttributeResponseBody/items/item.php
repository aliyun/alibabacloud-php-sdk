<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'DBInstanceType' => 'DBInstanceType',
        'dbInstanceId' => 'DbInstanceId',
        'duration' => 'Duration',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
