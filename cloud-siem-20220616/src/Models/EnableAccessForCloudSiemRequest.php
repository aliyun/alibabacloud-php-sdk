<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class EnableAccessForCloudSiemRequest extends Model
{
    /**
     * @description Whether import the log of SAS alert, the log of WAF alert, the log of CFW alert or not. Valid values:
     * - 1: imported automatically
     * @example 1
     *
     * @var int
     */
    public $autoSubmit;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the account that you switch from the management account.
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description The type of the view. Valid values:
     * - 1: the global account
     * @example 1
     *
     * @var int
     */
    public $roleType;
    protected $_name = [
        'autoSubmit' => 'AutoSubmit',
        'regionId'   => 'RegionId',
        'roleFor'    => 'RoleFor',
        'roleType'   => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSubmit) {
            $res['AutoSubmit'] = $this->autoSubmit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableAccessForCloudSiemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSubmit'])) {
            $model->autoSubmit = $map['AutoSubmit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
