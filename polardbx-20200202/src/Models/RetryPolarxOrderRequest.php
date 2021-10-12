<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class RetryPolarxOrderRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $scaleOutToken;
    protected $_name = [
        'regionId'       => 'RegionId',
        'DBInstanceName' => 'DBInstanceName',
        'scaleOutToken'  => 'ScaleOutToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->scaleOutToken) {
            $res['ScaleOutToken'] = $this->scaleOutToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetryPolarxOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ScaleOutToken'])) {
            $model->scaleOutToken = $map['ScaleOutToken'];
        }

        return $model;
    }
}
