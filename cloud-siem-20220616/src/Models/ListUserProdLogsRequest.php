<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListUserProdLogsRequest extends Model
{
    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 管理员切换成其他成员视角的用户ID。
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description 视图类型。
     *
     * - 1：企业下所有账号的视图。
     * @example 1
     *
     * @var int
     */
    public $roleType;

    /**
     * @description The log code.
     *
     * This parameter is required.
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @description The code of the cloud service.
     *
     * This parameter is required.
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;
    protected $_name = [
        'regionId'       => 'RegionId',
        'roleFor'        => 'RoleFor',
        'roleType'       => 'RoleType',
        'sourceLogCode'  => 'SourceLogCode',
        'sourceProdCode' => 'SourceProdCode',
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
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }
        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserProdLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }
        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }

        return $model;
    }
}
