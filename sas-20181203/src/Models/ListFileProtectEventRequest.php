<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListFileProtectEventRequest extends Model
{
    /**
     * @description The severities of alerts.
     *
     * @var int[]
     */
    public $alertLevels;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query.
     *
     * @example 1683195595204
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID of the asset.
     *
     * @example i-bp1fu4aqltf1huhc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example ca_cpm_****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset that you want to query.
     *
     * @example 120.27.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset that you want to query.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the rule.
     *
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The start of the time range to query.
     *
     * @example 1683080489594
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: unhandled
     *   1: handled
     *   2: added to the whitelist
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @description The server UUID.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the server UUID.
     * @example inet-ecs-4e876cb0-09f7-43b8-82ef-4bc7a937***
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertLevels'  => 'AlertLevels',
        'currentPage'  => 'CurrentPage',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'pageSize'     => 'PageSize',
        'ruleName'     => 'RuleName',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevels) {
            $res['AlertLevels'] = $this->alertLevels;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileProtectEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevels'])) {
            if (!empty($map['AlertLevels'])) {
                $model->alertLevels = $map['AlertLevels'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
