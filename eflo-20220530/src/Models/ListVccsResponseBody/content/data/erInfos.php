<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data;

use AlibabaCloud\Tea\Model;

class erInfos extends Model
{
    /**
     * @description Connections
     *
     * @example 2
     *
     * @var int
     */
    public $connections;

    /**
     * @description The time when the data address was created.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Description
     *
     * @example test_api_coverage
     *
     * @var string
     */
    public $description;

    /**
     * @description Elastic Router ID
     *
     * @example er-a7rqv1rq
     *
     * @var string
     */
    public $erId;

    /**
     * @description ER instance name
     *
     * @example er-1
     *
     * @var string
     */
    public $erName;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Primary Zone
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description ER region information
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Number of routing policy
     *
     * @example 2
     *
     * @var int
     */
    public $routeMaps;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'connections'  => 'Connections',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'erId'         => 'ErId',
        'erName'       => 'ErName',
        'gmtModified'  => 'GmtModified',
        'masterZoneId' => 'MasterZoneId',
        'message'      => 'Message',
        'regionId'     => 'RegionId',
        'routeMaps'    => 'RouteMaps',
        'status'       => 'Status',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erName) {
            $res['ErName'] = $this->erName;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeMaps) {
            $res['RouteMaps'] = $this->routeMaps;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return erInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErName'])) {
            $model->erName = $map['ErName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteMaps'])) {
            $model->routeMaps = $map['RouteMaps'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
