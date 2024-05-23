<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTenantMetricsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2021-06-13T15:45:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 2021-06-13T15:40:43Z
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description {"name":"DescribeTenantMetrics","product":"OceanBasePro","version":"2019-09-01","path":"/","deprecated":0,"method":"POST|GET","protocol":"HTTP|HTTPS","hidden":0,"timeout":10000,"parameter_type":"Single","params":"[{\\"name\\":\\"Action\\",\\"position\\":\\"Query\\",\\"required\\":true,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"description\\":\\"\\",\\"example\\":\\"DescribeTenantMetrics\\"},{\\"name\\":\\"InstanceId\\",\\"position\\":\\"Body\\",\\"required\\":true,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"ob317v4uif****\\"},{\\"name\\":\\"PageSize\\",\\"position\\":\\"Body\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"Integer\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"10\\"},{\\"name\\":\\"PageNumber\\",\\"position\\":\\"Body\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"Integer\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"1\\"},{\\"name\\":\\"TenantName\\",\\"position\\":\\"Body\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":true,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"pay_online\\"},{\\"name\\":\\"StartTime\\",\\"position\\":\\"Body\\",\\"required\\":true,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"2021-06-13T15:40:43Z\\"},{\\"name\\":\\"EndTime\\",\\"position\\":\\"Body\\",\\"required\\":true,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"2021-06-13T15:45:43Z\\"},{\\"name\\":\\"Metrics\\",\\"position\\":\\"Body\\",\\"required\\":true,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"tps\\"},{\\"name\\":\\"TenantId\\",\\"position\\":\\"Body\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":true,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"tfafd34fs****\\"},{\\"name\\":\\"TenantIdList\\",\\"position\\":\\"Body\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"[tdak3nac****,tdakc42df****]\\"}]","response_headers":"[]","response":"{\\"type\\":\\"Object\\",\\"children\\":[{\\"name\\":\\"TotalCount\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"Integer\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"9\\"},{\\"name\\":\\"RequestId\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C\\"},{\\"name\\":\\"TenantMetrics\\",\\"required\\":false,\\"checkBlank\\":false,\\"visibility\\":\\"Public\\",\\"deprecated\\":false,\\"type\\":\\"String\\",\\"title\\":\\"\\",\\"description\\":\\"\\",\\"example\\":\\"\\\\\\"Metrics\\\\\\":[ {\\\\\\"request_queue_rt\\\\\\":0.0,\\\\\\"TimeStamp\\\\\\":\\\\\\"2022-02-23T01:58:00Z\\\\\\"}]\\"}],\\"title\\":\\"\\",\\"description\\":\\"\\"}","errors":"{}"}
     *
     * This parameter is required.
     * @example tps
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description tfafd34fs****
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Example 1
     *
     * This parameter is required.
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example tfafd34fs****
     *
     * @deprecated
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example [tdak3nac****,tdakc42df****]
     *
     * @var string
     */
    public $tenantIdList;

    /**
     * @description 2021-06-13T15:45:43Z
     *
     * @example pay_online
     *
     * @deprecated
     *
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'metrics'      => 'Metrics',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
        'tenantId'     => 'TenantId',
        'tenantIdList' => 'TenantIdList',
        'tenantName'   => 'TenantName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantIdList) {
            $res['TenantIdList'] = $this->tenantIdList;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantIdList'])) {
            $model->tenantIdList = $map['TenantIdList'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
