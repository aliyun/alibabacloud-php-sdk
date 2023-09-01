<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolarDBXInstanceNodeRequest extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $CNNodeCount;

    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example pxc-hzjasdyuoo
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 2
     *
     * @var string
     */
    public $DNNodeCount;

    /**
     * @example 3
     *
     * @var string
     */
    public $dbInstanceNodeCount;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'CNNodeCount'         => 'CNNodeCount',
        'clientToken'         => 'ClientToken',
        'DBInstanceName'      => 'DBInstanceName',
        'DNNodeCount'         => 'DNNodeCount',
        'dbInstanceNodeCount' => 'DbInstanceNodeCount',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CNNodeCount) {
            $res['CNNodeCount'] = $this->CNNodeCount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DNNodeCount) {
            $res['DNNodeCount'] = $this->DNNodeCount;
        }
        if (null !== $this->dbInstanceNodeCount) {
            $res['DbInstanceNodeCount'] = $this->dbInstanceNodeCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolarDBXInstanceNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CNNodeCount'])) {
            $model->CNNodeCount = $map['CNNodeCount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DNNodeCount'])) {
            $model->DNNodeCount = $map['DNNodeCount'];
        }
        if (isset($map['DbInstanceNodeCount'])) {
            $model->dbInstanceNodeCount = $map['DbInstanceNodeCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
