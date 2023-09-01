<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DisableRightsSeparationRequest extends Model
{
    /**
     * @example pxc-sprcym7g7w****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example account_1
     *
     * @var string
     */
    public $dbaAccountName;

    /**
     * @example *****
     *
     * @var string
     */
    public $dbaAccountPassword;

    /**
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceName'     => 'DBInstanceName',
        'dbaAccountName'     => 'DbaAccountName',
        'dbaAccountPassword' => 'DbaAccountPassword',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->dbaAccountName) {
            $res['DbaAccountName'] = $this->dbaAccountName;
        }
        if (null !== $this->dbaAccountPassword) {
            $res['DbaAccountPassword'] = $this->dbaAccountPassword;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableRightsSeparationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DbaAccountName'])) {
            $model->dbaAccountName = $map['DbaAccountName'];
        }
        if (isset($map['DbaAccountPassword'])) {
            $model->dbaAccountPassword = $map['DbaAccountPassword'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
