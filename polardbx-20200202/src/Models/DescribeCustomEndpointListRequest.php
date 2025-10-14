<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class DescribeCustomEndpointListRequest extends Model
{
    /**
     * @var bool
     */
    public $checkDeleteCN;

    /**
     * @var string
     */
    public $customEndpointIds;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'checkDeleteCN' => 'CheckDeleteCN',
        'customEndpointIds' => 'CustomEndpointIds',
        'DBInstanceName' => 'DBInstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkDeleteCN) {
            $res['CheckDeleteCN'] = $this->checkDeleteCN;
        }

        if (null !== $this->customEndpointIds) {
            $res['CustomEndpointIds'] = $this->customEndpointIds;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (isset($map['CheckDeleteCN'])) {
            $model->checkDeleteCN = $map['CheckDeleteCN'];
        }

        if (isset($map['CustomEndpointIds'])) {
            $model->customEndpointIds = $map['CustomEndpointIds'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
