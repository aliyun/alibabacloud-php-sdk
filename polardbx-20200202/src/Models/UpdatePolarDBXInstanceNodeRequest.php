<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolarDBXInstanceNodeRequest extends Model
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
    public $dbInstanceNodeCount;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'            => 'RegionId',
        'DBInstanceName'      => 'DBInstanceName',
        'dbInstanceNodeCount' => 'DbInstanceNodeCount',
        'clientToken'         => 'ClientToken',
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
        if (null !== $this->dbInstanceNodeCount) {
            $res['DbInstanceNodeCount'] = $this->dbInstanceNodeCount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DbInstanceNodeCount'])) {
            $model->dbInstanceNodeCount = $map['DbInstanceNodeCount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
