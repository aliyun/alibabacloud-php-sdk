<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertsWithEventRequest extends Model
{
    /**
     * @description The title of the alert.
     *
     * @example Scan-Try SNMP weak password
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description Specifies whether an attack is defended. Valid values:
     *
     *   0: detected
     *   1: blocked
     *
     * @example 1
     *
     * @var string
     */
    public $isDefend;

    /**
     * @description The risk levels. The value is a JSON array. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
     * @example ["serious","suspicious","remind"]
     *
     * @var string[]
     */
    public $level;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @description The data source of the alert.
     *
     * @example sas
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the account within which the alert is generated.
     *
     * @example 176555323***
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'alertTitle'   => 'AlertTitle',
        'currentPage'  => 'CurrentPage',
        'incidentUuid' => 'IncidentUuid',
        'isDefend'     => 'IsDefend',
        'level'        => 'Level',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'roleFor'      => 'RoleFor',
        'roleType'     => 'RoleType',
        'source'       => 'Source',
        'subUserId'    => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->isDefend) {
            $res['IsDefend'] = $this->isDefend;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertsWithEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['IsDefend'])) {
            $model->isDefend = $map['IsDefend'];
        }
        if (isset($map['Level'])) {
            if (!empty($map['Level'])) {
                $model->level = $map['Level'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
