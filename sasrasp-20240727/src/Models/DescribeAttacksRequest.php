<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttacksRequest extends Model
{
    /**
     * @example sas
     *
     * @var string
     */
    public $agentType;

    /**
     * @example 67e283ee866f097cf07d****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $attackHostId;

    /**
     * @example sql
     *
     * @var string
     */
    public $attackType;

    /**
     * @example http://aliyun.com
     *
     * @var string
     */
    public $attackUrl;

    /**
     * @description This parameter is required.
     *
     * @example 1737216000000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @example block
     *
     * @var string
     */
    public $handlerType;

    /**
     * @example lshm-sec-waf-new-38
     *
     * @var string
     */
    public $hostname;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 4
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pid;

    /**
     * @example java
     *
     * @var string
     */
    public $raspType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $remote;

    /**
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @description This parameter is required.
     *
     * @example 1727281449756
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @example 2d14556b77cf1bf7c696e010aaa*****
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'agentType' => 'AgentType',
        'applicationId' => 'ApplicationId',
        'attackHostId' => 'AttackHostId',
        'attackType' => 'AttackType',
        'attackUrl' => 'AttackUrl',
        'endTimestamp' => 'EndTimestamp',
        'handlerType' => 'HandlerType',
        'hostname' => 'Hostname',
        'ip' => 'Ip',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pid' => 'Pid',
        'raspType' => 'RaspType',
        'region' => 'Region',
        'remote' => 'Remote',
        'severity' => 'Severity',
        'startTimestamp' => 'StartTimestamp',
        'unionId' => 'UnionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->attackHostId) {
            $res['AttackHostId'] = $this->attackHostId;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->attackUrl) {
            $res['AttackUrl'] = $this->attackUrl;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->handlerType) {
            $res['HandlerType'] = $this->handlerType;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->raspType) {
            $res['RaspType'] = $this->raspType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['AttackHostId'])) {
            $model->attackHostId = $map['AttackHostId'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['AttackUrl'])) {
            $model->attackUrl = $map['AttackUrl'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['HandlerType'])) {
            $model->handlerType = $map['HandlerType'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RaspType'])) {
            $model->raspType = $map['RaspType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
