<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListAccountsByLogRequest extends Model
{
    /**
     * @description The code that is used for multi-cloud environments.
     *
     * This parameter is required.
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The codes of logs. The value is a JSON array.
     *
     * This parameter is required.
     * @example ["cloud_siem_hcloud_waf_alert_log"]
     *
     * @var string[]
     */
    public $logCodes;

    /**
     * @description The code of the service.
     *
     * This parameter is required.
     * @example qcloud_waf
     *
     * @var string
     */
    public $prodCode;

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
        'cloudCode' => 'CloudCode',
        'logCodes'  => 'LogCodes',
        'prodCode'  => 'ProdCode',
        'regionId'  => 'RegionId',
        'roleFor'   => 'RoleFor',
        'roleType'  => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->logCodes) {
            $res['LogCodes'] = $this->logCodes;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
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
     * @return ListAccountsByLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['LogCodes'])) {
            if (!empty($map['LogCodes'])) {
                $model->logCodes = $map['LogCodes'];
            }
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
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
